<?php

namespace App\Http\Livewire\Admin\Settings\Component\Term;

use App\Models\EduTerm;
use App\Rules\Term\EditEndDate;
use App\Rules\Term\EditStartDate;
use Livewire\Component;

class ModalEdit extends Component
{
    protected $listeners = ['getTermEdit'];

    public function render()
    {
        return view('livewire.admin.settings.component.term.modal-edit');
    }

    public $idTable;

    public function getTermEdit($id)
    {
        $this->resetValidation();
        $this->idTable = $id;
        $record = EduTerm::find($id);
        if ($record) {
            $this->term = $record->term;
            $this->year = $record->year;
            $this->start_date = $record->start_date;
            $this->end_date = $record->end_date;
        }
    }

    public $term, $year, $start_date, $end_date;

    protected function rules()
    {
        return [
            'term' => ['required', 'numeric', 'in:1,2'],
            'year' => ['required', 'numeric', 'digits:4'],
            'start_date' => ['required', 'date', new EditStartDate($this->idTable)],
            'end_date' => ['required', 'date', 'after_or_equal:start_date', new EditEndDate($this->idTable)],
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
            $update = EduTerm::find($this->idTable);
            $update->update($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshTerm');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
