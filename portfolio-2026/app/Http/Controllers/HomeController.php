<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $fullname = "Ruíz Martijn Phang";

        $skills_array = [
            "PHP", "MySQL", "Docker", 
            "Laravel", "Git", "HTML", 
            "CSS", "Javascript", "Batchfile/cmd"
            ];

        $title = "projecten";

        return view('home', [
            "fullname" => "$fullname",
            "title" => "$title",
        ])->with("skills_array",$skills_array);
    }
}