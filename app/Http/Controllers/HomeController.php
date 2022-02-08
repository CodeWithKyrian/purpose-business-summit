<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketCodeRequest;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function Index()
    {
        seo()->title('The Biggest Student Summit in Owerri');
        return view('index');
    }
    public function Search(TicketCodeRequest $request)
    {
        seo()->title('Ticket Code Search');
        $ticket_code = $request->safe()->only('tcode');
        $user = User::with('ticket')->where('ticket_code', $ticket_code)->firstOrFail();

        return view('search', ['user' => $user]);
    }


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function paystackRedirect(Request $request)
    {
        $secretKey = config('paystack.secretKey');
        $baseUrl = config('paystack.paymentUrl');

        $ticket = Ticket::find($request->ticket_id);
        $data = [
            "amount" => $ticket->price * 100,
            "reference" => Str::uuid(),
            "email" => $request->email,
            "first_name" => $request->firstname,
            "last_name" => $request->lastname,
            "callback_url" => route('payment.callback'),
            "currency" => 'NGN',
            "metadata" => [
                'custom_fields' => [
                    ['display_name' => "Ticket Id", "variable_name" => "ticket_id", "value" => $ticket->id],
                    ['display_name' => "Ticket Name", "variable_name" => "ticket_name", "value" => $ticket->name],
                ],
                "ticket_id" => $ticket->id,
                "first_name" => $request->firstname,
                "last_name" => $request->lastname,
            ]
        ];

        try {
            $response = Http::acceptJson()
                ->withToken($secretKey)
                ->baseUrl($baseUrl)
                ->post(
                    '/transaction/initialize',
                    $data
                )
                ->json();
        } catch (\Exception $exp) {
            return redirect()->back()->with('message', 'Something went wrong. Please try again!');
        }

        $redirectUrl = $response['data']['authorization_url'];

        return redirect()->away($redirectUrl);
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function paystackCallback()
    {
        $transactionRef = request()->query('trxref');

        $response = Http::acceptJson()
            ->withToken(config('paystack.secretKey'))
            ->baseUrl(config('paystack.paymentUrl'))
            ->get("/transaction/verify/{$transactionRef}")
            ->json();

        if ($response['data']['status'] != "success") {
            return redirect()->back();
        }

        if ($response['message'] == "Verification successful" && $response['data']['status'] == "success") {
            $data = $response['data'];

            dd($data);

            $ticket_id = $data['metadata']['ticket_id'];
            $ticket = Ticket::find($ticket_id);

            $user = new User([
                'firstname' => $data['metadata']['first_name'],
                'lastname' => $data['metadata']['last_name'],
                'email' => $data['customer']['email'],
                'ticket_id' => $ticket_id,
                'ticket_code' => $this->generateTicketCode($ticket),
                'ticket_access' => 'online'
            ]);

            $user->save();

            $user->transactions()->create([
                'amount' => $data['amount'],
                'confirmed' => true,
                'uuid' => $data['reference'],
                'ip_address' => $data['ip_address'],
                'paid_at' => $data['paid_at']
            ]);
            // $user->notify();
        }

        return view('payment-complete');
    }

    public function generateTicketCode(Ticket $ticket)
    {
        $ticket->code . strtoupper(Str::random(3));
    }
}
