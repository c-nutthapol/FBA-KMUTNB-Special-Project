<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\EduTerm;
use Livewire\Component;
use Livewire\WithPagination;

class Term extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    protected $listeners = ['refreshTerm' => '$refresh'];

    public function render()
    {
        $edu_terms = EduTerm::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.settings.term', compact('edu_terms'));
    }

    public function delete($id)
    {
        try {
            $record = EduTerm::find($id);
            $check_date = strtotime(date('Y-m-d'));
            if (!($check_date >= $record->start_date->timestamp && $check_date <= $record->end_date->timestamp)) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
            } else {
                $this->emit('alert', ['status' => 'info', 'title' => 'ไม่สามารถลบข้อมูลได้', 'text' => 'เนื่องจากยังใช้งานอยู่']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
