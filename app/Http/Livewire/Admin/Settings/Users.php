<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;

    protected $paginationTheme = 'default';

    public $role, $search;

    public function render()
    {
        $users = User::when($this->role, function ($query) {
            $query->where('role_id', $this->role);
        })->when($this->search, function ($query) {
            $query->where('displayname', 'like', '%' . $this->search . '%');
            $query->orWhere('username', 'like', '%' . $this->search . '%');
            $query->orWhere('pid', 'like', '%' . $this->search . '%');
            $query->orWhere('firstname_en', 'like', '%' . $this->search . '%');
            $query->orWhere('lastname_en', 'like', '%' . $this->search . '%');
            $query->orWhere('email', 'like', '%' . $this->search . '%');
            $query->orWhere(DB::raw('concat(firstname_en," ",lastname_en)'), 'like', '%' . $this->search . '%');
        })->orderBy('id', 'DESC')->paginate(10);

        $roles = Role::get();

        return view('livewire.admin.settings.users', compact('users', 'roles'));
    }
}
