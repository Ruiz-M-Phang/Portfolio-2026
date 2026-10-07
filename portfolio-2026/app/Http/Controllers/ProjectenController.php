<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProjectenController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')
        ->get();

        return view('projecten')
        ->with('projects', $projects);
    }
}