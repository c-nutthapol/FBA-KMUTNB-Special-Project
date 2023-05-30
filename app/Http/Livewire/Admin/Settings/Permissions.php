<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    public $role, $search, $status;

    public function render()
    {
        $users = User::when($this->role, function ($query) {
            $query->where('role_id', $this->role);
        })->when($this->status, function ($query) {
            $query->where('status', $this->status);
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

        return view('livewire.admin.settings.permissions', compact('users', 'roles'));
    }

    public function changeStatus($id, $status)
    {
        try {
            $user = User::find($id);
            if ($user) {
                $user->status = $status;
                $user->save();
                $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function changeRole($id, $role)
    {
        try {
            $user = User::find($id);
            if ($user) {
                $user->role_id = $role;
                $user->save();
                $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
