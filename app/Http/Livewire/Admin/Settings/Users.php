<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;

    protected $paginationTheme = 'default';

    public function render()
    {
        $users = User::paginate(10);

        return view('livewire.admin.settings.users', compact('users'));
    }
}
