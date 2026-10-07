<?php

namespace App\Http\Controllers;

class OverMijController extends Controller
{
    public function index()
    {
        $sections = [
            [
                "h2" => "Wie ben ik",
                'image'=> "image/Almere-Satellite-Map-and Waterways.png",
                "text" => "Zoals u al kon zien aan mijn hoofdpagina van mijn portfolio is mijn officiële naam Ruiz Martijn Phang.
                 Ik ben geboren in Almere, Nederland op 30 april 2003. Tot aan het heden woon ik in Almere.
                  In het geval als u mijn CV heeft gezien dan kon u mijn vaardigheden waarnemen.
                   In het geval als u mijn CV hebt misgelopen dan zal ik paar van mijn vaardigheden opsommen.
                    Mijn vaardigheden zijn leergierigheid, vriendelijk, geduldig en hulpvaardig.",
            ],
            [
                "h2" => "Mijn hobby's",
                'image'=> "image/hobby-programmeren.png",
                "text" => "Ook staat er op mijn CV wat mijn hobby’s zijn.
                 In mijn vrije tijd hou ik ervan om te gamen, programmeren, anime kijken, boeken lezen en manga lezen.
                  De games die ik graag speel zijn survival horror, action horror,
                   incremental/idle/clicker (Cookie Clicker) en non-competitive games.",
            ],
            [
                "h2" => "Wat wil ik leren",
                "text" => "Ik ben een leergierig person die graag Laravel, Tailwind,
                 PHP en MySQL wil leren en mijn kennis erin willen te verbeteren.
                  Echter sta ik ook open voor Javascript, C#, HTML, CSS en enz.
                   Waar ik ook graag ervaring in wil doen is om websites,
                    CLI programma's te maken en PHP problemen op te lossen.",
            ],
        ];

        return view('over-mij')
        ->with("sections", $sections);
    }
}