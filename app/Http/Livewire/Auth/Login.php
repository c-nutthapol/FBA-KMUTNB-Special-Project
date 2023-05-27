<?php

namespace App\Http\Livewire\Auth;

use Faker\Provider\UserAgent;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }

    public $username, $password;

    protected  $rules = [
        'username' => 'required|numeric|digits:12',
        'password' => 'required|min:8',
    ];

    protected $attributes = [
        'username' => 'รหัสนักศึกษา',
        'password' => 'รหัสผ่าน',
    ];


    public function submit()
    {
        $validatedData = $this->validate($this->rules, __('validation'), $this->attributes);
        try {
            if (auth()->attempt(['user_code' => $validatedData['username'], 'password' => $validatedData['password']])) {
                $browser = request()->header('User-Agent');
                $ipAddress = request()->getClientIp();
                $log = [
                    'email' => auth()->user()->email,
                    'ip' => $ipAddress,
                    'browser' => $browser,
                    'type' => auth()->user()->role->name
                ];
                if (auth()->user()->log) {
                    auth()->user()->log->update($log);
                } else {
                    auth()->user()->log()->create($log);
                }
                return redirect()->route('home');
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
