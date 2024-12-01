<?php

namespace App\Traits;

use App\Models\EduTerm;
use App\Models\Master_status;
use App\Models\Project;
use App\Models\Register_Request;
use App\Models\StudentRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use stdClass;

trait ProjectTrait
{

    public $request;

    public function checkError($isCreate = false): stdClass
    {

        $rid = 0;
        if ($this->step == 2) {
            $rid = 5;
        } elseif ($this->step == 3) {
            $rid = 6;
        } elseif ($this->step == 4) {
            $rid = 7;
        }
        // dd($this->project);
        // หาคำร้องแบบปกติ

        if($this->project){
            $this->request = StudentRequest::query()
            ->where("project_id", "=", $this->project->id)
            ->where("title", "=", $rid)
            ->where("updated_at", "<=", Carbon::now()->addDays(3))
            ->orderByDesc("id")
            ->first();
        }

        //for return error
        $result = new stdClass();
        $result->name = null;
        $result->redirect = null;
        $result->btn = null;
        // start check ลงทะเบียนล่าช้า
        $request2 = Register_Request::where("created_by", "=", Auth::user()->id)
            ->where("updated_at", "<=", Carbon::now()->addDays(3))
            ->orderByDesc("id")
            ->first();

        if (!$this->term) {
            $result->name = "ยังไม่ถึงช่วงเวลาการลงทะเบียนโครงงาน กรุณารอประกาศในภายหลัง";
        } elseif ($this->checkDate) {
            // ถ้าอยู่ในช่วงเวลา
            if ($this->project) {
                // ถ้ามีโปรเจ็ค
                $rid = 0;
                if ($this->step == 2) {
                    $rid = 5;
                } elseif ($this->step == 3) {
                    $rid = 6;
                } elseif ($this->step == 4) {
                    $rid = 7;
                }
                // หาคำร้องแบบปกติ
                $request = StudentRequest::query()
                    ->where("project_id", "=", $this->project->id)
                    ->where("title", "=", $rid)
                    ->where("updated_at", "<=", Carbon::now()->addDays(3))
                    ->orderByDesc("id")
                    ->first();
                // ตรวจสอบว่า ณ วันที่ step นี้เวลามากว่า เวลาปัจจุบันหรือไม่

                //  วันที่เปิดคือ 17 ตอนนี้วันที่ 18
                $startDate = $this->term->project_step->where("phase_" . $this->step . "_start_date", ">=", Carbon::now())->first();
                $endDate = $this->term->project_step->where("phase_" . $this->step . "_end_date", ">=", Carbon::now()->subDays(1))->first();
                if ($startDate) {
                    if ($this->step == 1) {
                        $date = $startDate->phase_1_start_date;
                    } elseif ($this->step == 2) {
                        $date = $startDate->phase_2_start_date;
                    } elseif ($this->step == 3) {
                        $date = $startDate->phase_3_start_date;
                    } elseif ($this->step == 4) {
                        $date = $startDate->phase_4_start_date;
                    }
                    $result->name = "ยังไม่ถึงช่วงเวลาที่กำหนด " . dateThai($date);
                } elseif ($request?->status != 26 && $request) {
                    $result->name = $request->master_requests->name . ": " . $request->master_status->status;
                    $result->redirect = route("student.history");
                    $result->btn = "ประวัติคำร้อง";
                } elseif ($request?->title != $rid && !$endDate) {
                    // ตรวจสอบว่า คำร้องตรงกับ rid (คำร้องใน step นั้นหรือไม่)

                    $result->name = "เลยระยะเวลาที่กำหนด";
                    $result->redirect = route("student.petition");
                    $result->btn = "สร้างคำร้อง";
                }
            } elseif ($this->term->project_step->where("phase_" . $this->step . "_start_date", ">=", Carbon::now())->first()
            ) {
                $result->name = "ยังไม่ถึงช่วงเวลาการลงทะเบียนโครงงาน";
            } elseif ($request2?->status != 26 && $request2) {
                $result->name = $request2->title . ": " . $request2->master_status->status;
                $result->redirect = route("student.history");
                $result->btn = "ประวัติคำร้อง";
            } elseif (!$request2 && !$this->checkDate ) {
                $result->name = "เลยระยะเวลาที่กำหนด";
                $result->redirect = route("student.petition");
                $result->btn = "สร้างคำร้อง";
            } elseif ($this->project && $isCreate) {
                $result->name = "ท่านมีโครงงานอยู่แล้ว";
                $result->redirect = route("student.project.home");
                $result->btn = "หน้าหลัก";
            } elseif (!$this->project && !$isCreate) {
                $result->name = "ท่านยังไม่มีโครงงาน";
                $result->redirect = route("student.project.create");
                $result->btn = "สร้างโครงงาน";
            }
        }
        elseif(!$this->checkDate && $request2 && !$this->project){
                // กรณีที่เลยเวลา และส่งคำร้องได้รับการอนุมัติจากแอดมินแล้ว
                if($request2->status == 26){
                    $result->name = "ท่านยังไม่มีโครงงาน กรุณาเริ่มดำเนินการ";
                    $result->redirect = route("student.project.create");
                    $result->btn = "สร้างโครงงาน";
                }else{
                    // กรณีที่ยังไม่ได้รับการอนุมัติจากแอดมิน
                    $result->name = "กรุณารอผู้ดูแลระบบอนุมัติคำร้องลงทะเบียนล่าช้า";
                }

        }
        elseif(!$this->checkDate && !$this->project && !$request2){
            // ทำการตรวจสอบว่า ถ้าไม่อยู่ในช่วงเวลา ไม่มีโปรเจ็ค และไม่มีคำร้อง
            // ถ้าเวลาปัจจุบันมากกว่า ช่วงที่ 1 ให้มีปุ่มคำร้อง
             // ถ้ามีโปรเจ็ค
          if($this->term->project_step->phase_1_start_date <= Carbon::now() ){
            $result->name = "ไม่อยู่ในช่วงเวลาที่กำหนด กรุณาสร้างคำร้อง";
            if(!$request2){
                $result->redirect = route("student.petition");
                $result->btn = "สร้างคำร้อง";
            }
           }else{
            // แต่ถ้าเวลาปัจจุบันยังไม่ถึง ช่วงที่ 1 ไม่ให้มีปุ่มคำร้อง
            $result->name = "ยังไม่ถึงช่วงเวลาการลงทะเบียนโครงงาน กรุณารอประกาศในภายหลัง";
           }
        }
        elseif(!$this->checkDate && $this->project && $this->step == 2){
            // ทำการตรวจสอบว่า ถ้าไม่อยู่ในช่วงเวลา มีโปรเจ็ค อยู่ step2 และไม่มีคำร้อง
            // ถ้าเวลาปัจจุบันมากกว่า ช่วงที่ 1 ให้มีปุ่มคำร้อง
            if($this->request?->status != 26){
                if($this->term->project_step->phase_2_start_date <= Carbon::now()){
                        if($this->request?->status == 22){
                            $result->name = "กรุณารออนุมัติจากที่ปรึกษาเพื่อดำเนินการต่อไป";
                        }else if($this->request?->status == 23){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 24){
                            $result->name = "ไม่อนุมัติจากที่ปรึกษา กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }else if($this->request?->status == 25){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 26){
                            $result->name = "อนุมัติจากผู้ดูแลระบบแล้วดำเนินการต่อไป";
                        }else if($this->request?->status == 27){
                            $result->name = "ไม่อนุมัติจากผู้ดูแลระบบ กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }
                    }
            }
            if($this->request == null){
                $result->name = "กรุณาสร้างคำร้อง เพื่อสำหรับการดำเนินการส่งโครงงานต่อไปเนื่องจากไม่อยู่ในช่วงเวลาที่กำหนด";
                $result->redirect = route("student.petition");
                $result->btn = "สร้างคำร้อง";
            }

        }
        elseif(!$this->checkDate && $this->project && $this->step == 3){
            // ทำการตรวจสอบว่า ถ้าไม่อยู่ในช่วงเวลา ไม่มีโปรเจ็ค และไม่มีคำร้อง
            // ถ้าเวลาปัจจุบันมากกว่า ช่วงที่ 1 ให้มีปุ่มคำร้อง
            if($this->request?->status != 26){
                if($this->term->project_step->phase_3_start_date <= Carbon::now()){
                        if($this->request?->status == 22){
                            $result->name = "กรุณารออนุมัติจากที่ปรึกษาเพื่อดำเนินการต่อไป";
                        }else if($this->request?->status == 23){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 24){
                            $result->name = "ไม่อนุมัติจากที่ปรึกษา กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }else if($this->request?->status == 25){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 26){
                            $result->name = "อนุมัติจากผู้ดูแลระบบแล้วดำเนินการต่อไป";
                        }else if($this->request?->status == 27){
                            $result->name = "ไม่อนุมัติจากผู้ดูแลระบบ กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }
                    }
            }
            if($this->request == null){
                $result->name = "กรุณาสร้างคำร้อง เพื่อสำหรับการดำเนินการส่งโครงงานต่อไปเนื่องจากไม่อยู่ในช่วงเวลาที่กำหนด";
                $result->redirect = route("student.petition");
                $result->btn = "สร้างคำร้อง";
            }
        }
        elseif(!$this->checkDate && $this->project && $this->step == 4){
            if($this->request?->status != 26){
                if($this->term->project_step->phase_4_start_date <= Carbon::now()){
                        if($this->request?->status == 22){
                            $result->name = "กรุณารออนุมัติจากที่ปรึกษาเพื่อดำเนินการต่อไป";
                        }else if($this->request?->status == 23){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 24){
                            $result->name = "ไม่อนุมัติจากที่ปรึกษา กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }else if($this->request?->status == 25){
                            $result->name = "อนุมัติที่ปรึกษาแล้ว ขั้นตอนต่อไปรออนุมัติจากผู้ดูแลระบบ";
                        }else if($this->request?->status == 26){
                            $result->name = "อนุมัติจากผู้ดูแลระบบแล้วดำเนินการต่อไป";
                        }else if($this->request?->status == 27){
                            $result->name = "ไม่อนุมัติจากผู้ดูแลระบบ กรุณาสร้างคำร้องใหม่";
                            $result->redirect = route("student.petition");
                            $result->btn = "สร้างคำร้อง";
                        }
                    }
            }
            if($this->request == null){
                $result->name = "กรุณาสร้างคำร้อง เพื่อสำหรับการดำเนินการส่งโครงงานต่อไปเนื่องจากไม่อยู่ในช่วงเวลาที่กำหนด";
                $result->redirect = route("student.petition");
                $result->btn = "สร้างคำร้อง";
            }
        }
        return $result;
    }

    /**
     * @return int
     */
    public function nextStatus(): int
    {
        $result = 0;
        $status = $this->project->master_status;
        if (Str::startsWith($status->status, "ผ่าน")) {
            $result = Master_status::query()
                ->where("role_id", "=", 1)
                ->where("step", "=", $status->step + 1)
                ->first()
                ->id;
        } else if (Str::startsWith($status->status, "ไม่")) {
            $result = Master_status::query()
                ->where("status", "like", "%รอ%")
                ->where("step", "=", $status->step)
                ->first()
                ->id;
        } else {
            $result = $status->id;
        }
        return $result;
    }

    public function getCheckDateProperty(): bool
    {
        return (bool)$this->term
            ->project_step()
            ->where("phase_" . $this->step . "_start_date", "<=", Carbon::now())
            ->where("phase_" . $this->step . "_end_date", ">", Carbon::now()->subDays(1))
            ->first();
    }

    /**
     * @return int
     */
    public function getStepProperty(): int
    {
        if (!$this->term) return 0;
        $step = $this->project->master_status->step ?? 1;
        if (Str::startsWith($this->project?->master_status->status, "ผ่าน") && $step < 4) {
            $step++;
        }
        return $step;
    }

    /**
     * @return Project|null
     */
    public function getProjectProperty(): Project|null
    {
        return Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })
            ->with("user_project")
            ->first();
    }

    /**
     * @return EduTerm|null
     */
    public function getTermProperty(): EduTerm|null
    {
        return EduTerm::query()
            ->whereHas("project_step")
            ->with("project_step")
            ->where("start_date", "<=", Carbon::now())
            ->where("end_date", ">=", Carbon::now())
            ->first();
    }
}
