<?php

namespace App\Traits;

use App\Models\EduTerm;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use stdClass;

trait ProjectTrait
{
    /**
     * Check project status.
     */
    public static function checkStep(Project $project)
    {
        if (!$project->id) {
            return 1;
        }
        $step = $project->master_status->step;
        if (
            $project->master_status->role_id == 3 &&
            str_contains($project->master_status->status, "อนุมัติ") &&
            $project->master_status->step == 1
        ) {
            $step++;
        } elseif (
            $project->master_status->role_id == 3 &&
            str_contains($project->master_status->status, "อนุมัติผล") &&
            $project->master_status->step != 5
        ) {
            $step++;
        }
        return (int) $step;
    }
    /**
     * return next status from current
     */
    public static function nextStatus(int $status)
    {
        //ทำซ้ำหากไม่ผ่าน
        if ($status == 8 || $status == 10 || $status == 13) {
            $result = 6;
        } elseif ($status == 17 || $status == 19 || $status == 22) {
            $result = 15;
        } elseif ($status == 26 || $status == 28 || $status == 31) {
            $result = 24;
        } elseif ($status == 36) {
            $result = 32;
        }
        //next step
        elseif ($status == 4) {
            $result = 6;
        } elseif ($status == 14) {
            $result = 15;
        } elseif ($status == 23) {
            $result = 24;
        } elseif ($status == 32) {
            $result = 33;
        } else {
            $result = $status;
        }
        return $result;
    }
    /**
     * Get Project.
     */
    public static function getProject()
    {
        return Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })
            ->with("user_project", "comments", "master_status")
            ->first() ?? new Project();
    }
    /**
     * Get Term
     */
    public static function getTerm()
    {
        return EduTerm::query()
            ->where("start_date", "<=", now())
            ->where("end_date", ">=", now())
            ->whereHas("project_step")
            ->with("project_step")
            ->first() ?? new EduTerm();
    }
    /**
     * Check Error.
     */
    public static function checkError(EduTerm $term, Project $project, $isCreate = false)
    {
        $result = new stdClass();
        $step = self::checkStep(self::getProject());
        $checkDate = self::checkDate($term, $step);
        if (!$term->id) {
            $result->name = "ยังไม่มีการประกาศการลงทะเบียนโครงงาน กรุณารอประกาศในภายหลัง";
        } elseif ($checkDate == false) {
            $result->name = "เลยระยะเวลาที่กำหนด";
            $result->redirect = route("student.petition");
            $result->btn = "สร้างคำร้อง";
        } elseif ($project->id && $isCreate == true) {
            $result->name = "ท่านมีโครงงานอยู่แล้ว";
            $result->redirect = route("student.project.home");
            $result->btn = "หน้าหลัก";
        } elseif (!$project->id) {
            $result->name = "ท่านยังไม่มีโครงงาน กรุณาสร้างโครงงานก่อน";
            $result->redirect = route("student.project.create");
            $result->btn = "สร้างโครงงาน";
        } else {
            $result = null;
        }
        return $result;
    }
    /**
     * Return false if out date
     */
    public static function checkDate(EduTerm $term, int $step)
    {
        $today = date("Y-m-d");
        $result =
            $term
                ->project_step()
                ->where("phase_" . $step . "_start_date", "<=", $today)
                ->where("phase_" . $step . "_end_date", ">=", $today)
                ->first() ?? false;
        return (bool) $result;
    }
}
