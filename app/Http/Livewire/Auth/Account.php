<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Account extends Component
{
    public function render()
    {
        return view('livewire.auth.account');
    }

    public $username, $displayname, $firstname_en, $lastname_en, $pid, $email, $room, $department;

    public function mount()
    {
        $user = auth()->user();
        $this->username = $user->username;
        $this->displayname = $user->displayname;
        $this->firstname_en = $user->firstname_en;
        $this->lastname_en = $user->lastname_en;
        $this->pid = $user->pid;
        $this->email = $user->email;
        $this->room = $user->room;
        $this->department = $user->department;
    }

    protected  $rules = [
        'room' => 'required|string|max:14',
        'department' => 'required|min:8',
    ];

    protected $attributes = [
        'room' => 'ห้อง',
        'department' => 'สาขาวิชา',
    ];


    public function submit()
    {
        $validatedData = $this->validate($this->rules, __('validation'), $this->attributes);

        try {
            $user = auth()->user();
            $user->update($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
