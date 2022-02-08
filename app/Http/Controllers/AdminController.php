<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketCodeRequest;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\TicketRegistered;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $user = request()->user();
        $user->load('referrals');
        $users = User::with(['ticket', 'referrer'])->role('attendee')->latest()->paginate(10);

        $users_count = User::role('attendee')->count();
        $fromOnline = User::role('attendee')->fromOnline()->count();
        $fromOffline = User::role('attendee')->fromOffline()->count();

        return view('admin.dashboard', [
            'users' => $users,
            'users_count' => $users_count,
            'fromOnline' => $fromOnline,
            'fromOffline' => $fromOffline,
            'referrals' => $user->referrals
        ]);
    }

    public function Search(Request $request)
    {
        $searchTerm = $request->only('s');
        $users = User::with('ticket')
            ->where('ticket_code', $searchTerm)
            ->orWhere('firstname', 'like', $searchTerm)
            ->orWhere('lastname', 'like', $searchTerm)
            ->orWhere('email', $searchTerm)
            ->get();

        return view('admin.search', ['users' => $users]);
    }

    public function RegisterTicketForm()
    {
        $tickets = Ticket::all();
        return view('admin.register-ticket', ['tickets' => $tickets]);
    }

    public function RegisterTicket(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'ticket_code' => 'required|unique:users,ticket_code'
        ]);

        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'ticket_id' => $request->ticket_id,
            'ticket_code' => strtoupper($request->ticket_code),
            'referrer_id' => auth()->user()->id
        ]);

        $user->save();
        $user->assignRole('attendee');
        $user->notify(new TicketRegistered());

        session()->flash('message', 'Ticket registered successfully');

        return redirect()->route('admin.dashboard');
    }

    public function UserReferrals()
    {
        $user = request()->user();
        $user->load('referrals');

        return view('admin.user-referrals', ['referrals' => $user->referrals]);
    }

    public function GetVolunteers()
    {
        $volunteers = User::role('volunteer')->withCount('referrals')->get();

        return view('admin.volunteers', ['volunteers' => $volunteers]);
    }

    public function ApproveVolunteer(User $user)
    {
        $this->authorize('approve-volunteers');

        $user->givePermissionTo('access-dashboard');

        return redirect()->route('admin.volunteers.list')->with('message', 'Volunteer account approved successfully');
    }

    public function DisproveVolunteer(User $user)
    {
        $this->authorize('approve-volunteers');

        $user->revokePermissionTo('access-dashboard');

        return redirect()->route('admin.volunteers.list')->with('message', 'Volunteer account revoked successfully');
    }

    public function DeleteVolunteer(User $user)
    {
        $this->authorize('approve-volunteers');

        $user->delete();

        return redirect()->route('admin.volunteers.list')->with('message', 'Volunteer account deleted permanently');
    }

}
