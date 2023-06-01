<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function getStudent(Request $request)
    {
        $search = $request->search;
        $data = User::query()
            ->limit(5)
            ->select("id", "displayname AS text")
            ->where("role_id", 1)
            ->when($search, function ($q) use ($search) {
                $q->where("displayname", "LIKE", "%" . $search . "%");
            })
            ->where("id", "!=", Auth::user()->id)
            ->orderBy("id", "desc")
            ->get();
        return response()->json(["results" => $data]);
    }
    public function getTeacher(Request $request)
    {
        $search = $request->search;
        $type = $request->type;
        $data = User::query()
            ->limit(5)
            ->select("id", "displayname AS text")
            ->where("role_id", 2)
            ->when($search, function ($q) use ($search) {
                $q->where("displayname", "LIKE", "%" . $search . "%");
            })
            ->where("id", "!=", Auth::user()->id)
            ->orderBy("id", "desc")
            ->get();
        if ($type == "teacher2") {
            $data->push([
                "id" => "external",
                "text" => "อาจารย์ภายนอก",
            ]);
        }
        return response()->json(["results" => $data]);
    }
}
