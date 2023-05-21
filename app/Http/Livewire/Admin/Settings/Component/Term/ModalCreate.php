<?php

namespace App\Http\Livewire\Admin\Settings\Component\Term;

use App\Models\EduTerm;
use App\Rules\Term\CreateStartDate;
use Livewire\Component;

class ModalCreate extends Component
{

    protected $listeners = ['getTermCreate'];

    public function render()
    {
        return view('livewire.admin.settings.component.term.modal-create');
    }

    public function getTermCreate()
    {
        $this->reset('term', 'year', 'start_date', 'end_date');
        $this->resetValidation();
    }

    public $term, $year, $start_date, $end_date;

    protected function rules()
    {
        return [
            'term' => ['required', 'numeric', 'in:1,2'],
            'year' => ['required', 'numeric', 'digits:4'],
            'start_date' => ['required', 'date', new CreateStartDate],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ];
    }

    protected $attributes = [
        'term' => 'ภาคเรียน',
        'year' => 'ปีการศึกษา',
        'start_date' => 'วันที่เริ่มภาคเรียน',
        'end_date' => 'วันที่จบภาคเรียน',
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            EduTerm::create($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshTerm');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
