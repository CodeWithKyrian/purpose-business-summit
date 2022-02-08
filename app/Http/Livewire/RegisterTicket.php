<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use App\Models\User;
use App\Notifications\TicketRegistered;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Validator;
use Livewire\Component;

class RegisterTicket extends Component
{
    /**
     * @var Collection
     */
    public $tickets;

    public $pre_code;


    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $gender;
    public $ticket_id;
    public $suf_code;


    protected $rules = [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'email' => 'required|email|unique:users',
    ];

    public function mount()
    {
        $this->tickets = Ticket::all();
        $this->ticket_id = $this->tickets->first()->id;
        $this->pre_code = $this->tickets->find($this->ticket_id)->code;
    }

    public function submit()
    {
        $this->withValidator(function (Validator $validator) {
            $validator->after(function ($validator) {
                $ticket_code = strtoupper($this->pre_code . $this->suf_code);
                $exists = User::where('ticket_code', $ticket_code)->exists();
                if ($exists) {
                    $validator->errors()->add('suf_code', 'Ticket already registered');
                }
            });
        })->validate();

        $user = new User([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'ticket_id' => $this->ticket_id,
            'ticket_code' => strtoupper($this->pre_code . $this->suf_code), 
        ]);

        $user->save();
        $user->notify(new TicketRegistered);

        session()->flash('message', 'Ticket registered successfully');

        return redirect()->route('admin.dashboard');
    }

    public function updatedTicketId()
    {
        $this->pre_code = $this->tickets->find($this->ticket_id)->code;
    }

    public function render()
    {
        return view('livewire.register-ticket')
            ->layout('layouts.admin', ['title' => 'Register Ticket']);
    }
}
