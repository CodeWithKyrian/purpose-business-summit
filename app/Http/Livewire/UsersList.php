<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::with('referrer')->role('attendee')->latest()->paginate(10)
        ])->layout('layouts.admin', ['title' => 'All Users']);;
    }
}
