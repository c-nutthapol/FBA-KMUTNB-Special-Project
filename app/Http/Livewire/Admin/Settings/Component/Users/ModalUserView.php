<?php

namespace App\Http\Livewire\Admin\Settings\Component\Users;

use App\Models\User;
use Livewire\Component;

class ModalUserView extends Component
{
    protected $listeners = ['getUserView'];

    public function render()
    {
        return view('livewire.admin.settings.component.users.modal-user-view');
    }

    public $username, $displayname, $firstname_en, $lastname_en, $pid, $email, $room, $department;

    public function getUserView($id)
    {
        $user = User::find($id);
        // dd($user);

        if ($user) {
            $this->username = $user->username;
            $this->displayname = $user->displayname;
            $this->pid = ($user->role_id == 1) ? substr($user->username, 1) : "-" ;
            $this->email = $user->email;
            $this->firstname_en = $user->firstname_en;
            $this->lastname_en = $user->lastname_en;
            $this->room = $user->room;
            $this->department = $user->department;
        }
    }
}
