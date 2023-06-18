<?php

namespace App\Traits;

use App\Models\EduTerm;
use App\Models\Project;
use App\Models\ProjectStepConfig;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use stdClass;

trait ProjectTrait
{
    public function checkError($isCreate = false): stdClass|null
    {
        $result = new stdClass();
        $step = $this->step;
        if (!$this->term->id) {
            $result->name = "ยังไม่มีการประกาศการลงทะเบียนโครงงาน กรุณารอประกาศในภายหลัง";
        } elseif (!$this->checkDate()) {
            $result->name = "เลยระยะเวลาที่กำหนด";
            $result->redirect = route("student.petition");
            $result->btn = "สร้างคำร้อง";
        } elseif ($this->project->id && $isCreate) {
            $result->name = "ท่านมีโครงงานอยู่แล้ว";
            $result->redirect = route("student.project.home");
            $result->btn = "หน้าหลัก";
        } elseif (!$this->project->id && !$isCreate) {
            $result->name = "ท่านยังไม่มีโครงงาน กรุณาสร้างโครงงานก่อน";
            $result->redirect = route("student.project.create");
            $result->btn = "สร้างโครงงาน";
        } else {
            $result = null;
        }
        return $result;
    }

    public function checkDate(): bool
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
        $status = $this->project->master_status->id;
        //ทำซ้ำหากไม่ผ่าน
        if ($status == 9 || $status == 12) {
            $result = 7;
        } elseif ($status == 15 || $status == 18) {
            $result = 13;
        } elseif ($status == 21) {
            $result = 19;
        } //next step
        elseif ($status == 4 || $status == 5) {
            $result = 7;
        } elseif ($status == 10 | $status == 11) {
            $result = 13;
        } elseif ($status == 16 | $status == 17) {
            $result = 19;
        } else {
            $result = $status;
        }
        return $result;
    }

    public function getTermStepProperty(): ProjectStepConfig
    {
        $term = $this->step;
        return ProjectStepConfig::query()
            ->where("phase_" . $this->step . "_start_date", "<=", Carbon::now())
            ->where("phase_" . $this->step . "_end_date", ">=", Carbon::now())
            ->where("phase_" . $term . "_status", "=", 1)
            ->first();
    }

    /**
     * @return int
     */
    public function getStepProperty(): int
    {
        $project = $this->project;
        $step = 1;
        $step = $this->step ?? $step;
        if (
            $project->master_status->role_id == 3 &&
            str_contains($project->master_status->status, "อนุมัติ") &&
            $project->master_status->step == 1 || $project->master_status->role_id == 3 &&
            str_contains($project->master_status->status, "อนุมัติผล") &&
            $project->master_status->step != 5
        ) {
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
            ->where("start_date", "<=", Carbon::now())
            ->where("end_date", ">=", Carbon::now())
            ->first();
    }
}
