<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact";

        $text = "Heeft u een project voor mij? Kom per direct in contact met me!";

        $hyperlinks = [
                [
                    'name' => 'Github',
                    'link' => 'https://github.com/Ruiz-M-Phang',
                ],
                [
                    'name' => 'LinkedIn',
                    'link' => 'https://www.linkedin.com/in/ruiz-phang-8115972ba/',
                ],
            ];

        return view('contact', [
            'title' => $title,
            'text' => $text,
            'hyperlinks' => $hyperlinks,
        ]);
    }
}