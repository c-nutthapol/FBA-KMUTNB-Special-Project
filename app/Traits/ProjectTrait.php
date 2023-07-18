<?php

namespace App\Traits;

use App\Models\EduTerm;
use App\Models\Master_status;
use App\Models\Project;
use App\Models\StudentRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use stdClass;

trait ProjectTrait
{

    public function checkError($isCreate = false): stdClass
    {
        $result = new stdClass();
        $result->name = null;
        $result->redirect = null;
        $result->btn = null;
        if (!$this->term) {
            $result->name = "ยังไม่ถึงช่วงเวลาการลงทะเบียนโครงงาน กรุณารอประกาศในภายหลัง";
        } elseif (!$this->checkDate) {
            if ($this->project) {
                $request = StudentRequest::query()
                    ->where("project_id", "=", $this->project->id)
                    ->where("status", "=", 26)
                    ->where("updated_at", "<=", Carbon::now()->addDays(3))
                    ->first();
                if (!$request?->title == $this->project->master_status->step) {
                    $result->name = "เลยระยะเวลาที่กำหนด";
                    $result->redirect = route("student.petition");
                    $result->btn = "สร้างคำร้อง";
                }
            } elseif ($this->term->project_step->where("phase_1_start_date", ">=", Carbon::now())->first()
            ) {
                $result->name = "ยังไม่ถึงช่วงเวลาการลงทะเบียนโครงงาน";
            } else {
                $result->name = "เลยระยะเวลาที่กำหนด";
            }
        } elseif ($this->project?->id && $isCreate) {
            $result->name = "ท่านมีโครงงานอยู่แล้ว";
            $result->redirect = route("student.project.home");
            $result->btn = "หน้าหลัก";
        } elseif (!$this->project?->id && !$isCreate) {
            $result->name = "ท่านยังไม่มีโครงงาน";
            $result->redirect = route("student.project.create");
            $result->btn = "สร้างโครงงาน";
        }
        return $result;
    }

    public function getCheckDateProperty(): bool
    {
        return (bool)$this->term
            ->project_step()
            ->where("phase_" . $this->step . "_start_date", "<=", Carbon::now())
            ->where("phase_" . $this->step . "_end_date", ">=", Carbon::now())
            ->first();
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
