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

        $preferences = [
            "plus" => [
                "In een team werken",
                "Backend werk",
                "Zelfstandigheid",
                "Vrijheid",
                "Laravel werkzaamheden",
                "Database werkzaamheden",
            ],
            "minus" => [
                "Veel taken krijgen",
                "Monotonerig werk",
                "Verplicht worden",
                "Aangeraakt worden door mannen", // <- dit is een grapje
            ],
        ];

        $PlusPreferences = $preferences["plus"];

        $MinusPreferences = $preferences["minus"];

        $title = "projecten";

        return view('home', [
            "fullname" => "$fullname",
            "title" => "$title",
        ])->with("skills_array",$skills_array)
        ->with("PlusPreferences",$PlusPreferences)
        ->with("MinusPreferences",$MinusPreferences); // With the with fuction you can give an array to the view function
    }
}