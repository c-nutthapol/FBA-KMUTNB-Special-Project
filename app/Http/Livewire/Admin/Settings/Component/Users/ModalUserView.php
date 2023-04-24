<?php

namespace App\Http\Livewire\Admin\Settings\Component\Users;

use App\Models\User;
use Livewire\Component;

class ModalUserView extends Component
{
    protected $listeners = ['getUser'];

    public function render()
    {
        return view('livewire.admin.settings.component.users.modal-user-view');
    }

    public $avatar, $name, $code, $email, $room, $branch;

    public function getUser($id)
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
