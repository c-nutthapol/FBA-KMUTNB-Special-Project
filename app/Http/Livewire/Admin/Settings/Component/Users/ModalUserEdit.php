<?php

namespace App\Http\Livewire\Admin\Settings\Component\Users;

use App\Models\User;
use Livewire\Component;

class ModalUserEdit extends Component
{
    protected $listeners = ['getUserEdit'];

    public function render()
    {
        return view('livewire.admin.settings.component.users.modal-user-edit');
    }

    public $avatar, $name, $code, $email, $room, $branch;

    public function getUserEdit($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->avatar = $user->avatar;
            $this->name = $user->name;
            $this->code = $user->user_code;
            $this->email = $user->email;
            $this->room = $user->room;
            $this->branch = $user->branch;
        }
    }
}
