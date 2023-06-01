<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view("livewire.auth.login");
    }

    public $username = "yuttachais",
        $password = "stamp1992";

    protected $rules = [
        "username" => "required|string|max:14",
        "password" => "required|min:8",
    ];

    protected $attributes = [
        "username" => "ชื่อผู้ใช้",
        "password" => "รหัสผ่าน",
    ];

    private function getUserICIT($username, $password)
    {
        $token = "5UaTyf96aWgeAeha912oqF-9vtMc_LiZ";
        $response = Http::withToken($token)
            ->asForm()
            ->post("https://api.account.kmutnb.ac.th/api/account-api/user-authen", [
                "username" => $username,
                "password" => $password,
                "scopes" => "personel,student,templecturer,alumni",
                "personel_info" => 1,
            ]);
        $api_status_code = $response["api_status_code"];
        if ($api_status_code == 202) {
            $user_info = $response["userInfo"];

            $account_type = $user_info["account_type"];
            if ($account_type == "personel" || $account_type == "templecturer") {
                $role_id = 2;
            } else {
                $role_id = 1;
            }

            $user = User::where("username", $user_info)->first();
            $is_first_time = false;
            if (!$user) {
                $user = new User();
                $is_first_time = true;
            }
            $user->username = $user_info["username"];
            $user->password = $password;
            $user->displayname = $user_info["displayname"];
            $user->firstname_en = $user_info["firstname_en"];
            $user->lastname_en = $user_info["lastname_en"];
            $user->pid = $user_info["pid"];
            $user->email = $user_info["email"];
            if ($is_first_time) {
                $user->role_id = $role_id;
                $user->status = "active";
            }

            $user->save();
            return $user;
        } elseif ($api_status_code == 405) {
            $this->emit("alert", ["status" => "info", "title" => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!"]);
        }
    }

    public function submit()
    {
        $validatedData = $this->validate($this->rules, __("validation"), $this->attributes);
        $user = $this->getUserICIT($validatedData["username"], $validatedData["password"]);

        try {
            if (in_array($user->status, ["active"])) {
                auth()->login($user);
            }

            if (auth()->check()) {
                $browser = request()->header("User-Agent");
                $ipAddress = request()->getClientIp();
                $log = [
                    "email" => auth()->user()->email,
                    "ip" => $ipAddress,
                    "browser" => $browser,
                    "type" => auth()->user()->role->guard,
                ];
                if (auth()->user()->log) {
                    auth()
                        ->user()
                        ->log->update($log);
                } else {
                    auth()
                        ->user()
                        ->log()
                        ->create($log);
                }
                $this->emit("alert", ["status" => "success", "title" => "เข้าสู่ระบบเสร็จสิ้น"]);
                $this->emit("redirect", route("home"));
            } else {
                $this->emit("alert", ["status" => "error", "title" => "เข้าสู่ระบบไม่สำเร็จ"]);
            }
        } catch (\Exception $e) {
            $this->emit("alert", ["status" => "error", "title" => "เกิดข้อผิดพลาด", "text" => $e->getMessage()]);
        }
    }
}
