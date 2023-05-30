<?php

namespace App\Http\Livewire\Admin;

use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Logs extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    public function render()
    {
        $logs = Log::where('type', $this->type)
            ->when($this->search, function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('displayname', 'like', '%' . $this->search . '%');
                    $query->orWhere('username', 'like', '%' . $this->search . '%');
                    $query->orWhere('pid', 'like', '%' . $this->search . '%');
                    $query->orWhere('firstname_en', 'like', '%' . $this->search . '%');
                    $query->orWhere('lastname_en', 'like', '%' . $this->search . '%');
                    $query->orWhere('email', 'like', '%' . $this->search . '%');
                    $query->orWhere(DB::raw('concat(firstname_en," ",lastname_en)'), 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('updated_at', $this->order_by)->paginate(10);
        return view('livewire.admin.logs', compact('logs'));
    }

    public $title, $role, $order_by = 'DESC', $search, $type;

    public function mount()
    {
        if ($this->role == 'students') {
            $this->type = 'student';
            $this->title = 'ข้อมูลการเข้าใช้งานของนักศึกษา';
        } elseif ($this->role == 'teachers') {
            $this->type = 'teacher';
            $this->title = 'ข้อมูลการเข้าใช้งานของอาจารย์';
        } elseif ($this->role == 'administrators') {
            $this->type = 'admin';
            $this->title = 'ข้อมูลการเข้าใช้งานของผู้ดูแลระบบ';
        } else {
            return abort(404);
        }
    }
}
