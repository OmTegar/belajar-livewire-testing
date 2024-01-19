<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = ['userCreated' => 'refreshTable'];

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('livewire.user-table', ['Users' => $users]);
    }

    public function refreshTable()
    {
        // $this->dispatch('refreshTable');
        $this->render();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('success', 'User successfully deleted.');
    }
}
