<?php

namespace App\Http\Livewire\Students\Component\History;

use App\Models\StudentRequest;
use Livewire\Component;

class ModalChangeRequest extends Component
{
    protected $listeners = ['getModal'];

    public function render()
    {
        return view('livewire.students.component.history.modal-change-request');
    }

    private $config = [
        1 => [
            'type' => 'input',
            'day' => 7
        ],
        2 => [
            'type' => 'select',
            'day' => 7,
        ],
        3 => [
            'type' => 'select',
            'day' => 7,
        ]
    ];

    public $name, $value, $type, $within_date;

    public function getModal($id)
    {
        $this->reset(['name', 'value', 'type']);

        $record = StudentRequest::find($id);
        if ($record) {
            $day = $this->config[$record->title]['day'];
            $this->type = $this->config[$record->title]['type'];
            $this->within_date = $record->updated_at->addDays($day)->format('Y-m-d');
            $this->name = $record->name_request_for_table;
        }
    }
    public function submit()
    {

    }
}
