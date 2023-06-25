<?php

namespace App\Http\Livewire\Students\Component\History;

use App\Models\Project;
use App\Models\StudentRequest;
use Carbon\Carbon;
use Exception;
use Livewire\Component;

class ModalChangeRequest extends Component
{
    protected $listeners = ['getModal'];

    public function render()
    {
        return view('livewire.students.component.history.modal-change-request');
    }

    private $config = [
        1 => 7,
        2 => 7,
        3 => 7
    ];

    public $s_req_id, $name, $m_req_id, $data = [], $within_date, $project_id;

    public function getModal($id)
    {
        $this->reset(['name', 'data']);

        $record = StudentRequest::find($id);
        if ($record) {
            $this->s_req_id = $id;
            $day = $this->config[$record->title];
            $this->within_date = $record->updated_at->addDays($day)->format('Y-m-d');
            $this->name = $record->name_request_for_table;
            $this->project_id = $record->project_id;
            $this->m_req_id = $record->title;
            if ($this->m_req_id == 1) {
                $this->data['name_th'] = $record->project->name_th;
                $this->data['name_en'] = $record->project->name_en;
            }
        }
    }

    protected function rules()
    {
        if ($this->m_req_id == 1) {
            $rules['data.name_th'] = 'required';
            $rules['data.name_en'] = 'required';
        } elseif ($this->m_req_id == 2) {
            $rules['data.teacher2'] = 'nullable|exists:users,id';
        } elseif ($this->m_req_id == 3) {
            $rules['data.teacher3'] = 'nullable|exists:users,id';
        } else {
            $rules = [];
        }

        return $rules;
    }

    public function attributes()
    {
        if ($this->m_req_id == 1) {
            $attributes['data.name_th'] = 'ชื่อโครงงาน (ภาษาไทย)';
            $attributes['data.name_en'] = 'ชื่อโครงงาน (ภาษาอังกฤษ)';
        } elseif ($this->m_req_id == 2) {
            $attributes['data.teacher2'] = 'nullable|exists:users,id';
        } elseif ($this->m_req_id == 3) {
            $attributes['data.teacher3'] = 'nullable|exists:users,id';
        } else {
            $attributes = [];
        }

        return $attributes;
    }


    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes());

        try {
            if ($this->m_req_id == 1) {
                $this->changeNameProject($validatedData['data']);
            } elseif (in_array($this->m_req_id, [2, 3])) {
                $this->changeTeacher($validatedData['data']);
            }
            $update = StudentRequest::find($this->s_req_id);
            $update->modified_at = Carbon::now();
            $update->save();
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshHistory');
            $this->emit('close_modal', 'modalChangeRequest');
        } catch (Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    private function changeNameProject(array $data)
    {
        $update = Project::find($this->project_id);

        return $update->update($data);
    }


    private function changeTeacher(array $data)
    {
        $update = Project::find($this->project_id);
        if ($this->m_req_id == 2) {
            if ($id = $update->users()->wherePivot('role', 'teacher2')->first()) {
                $update->users()->detach($id, ['role' => 'teacher2']);
                $update->users()->attach($data['teacher2'], ['role' => 'teacher2']);
            } else {
                $update->users()->attach($data['teacher2'], ['role' => 'teacher2']);
            }
        } elseif ($this->m_req_id == 3) {
            if ($id = $update->users()->wherePivot('role', 'teacher3')->first()) {
                $update->users()->detach($id, ['role' => 'teacher3']);
                $update->users()->attach($data['teacher3'], ['role' => 'teacher3']);
            } else {
                $update->users()->attach($data['teacher3'], ['role' => 'teacher3']);
            }
        }
    }
}
