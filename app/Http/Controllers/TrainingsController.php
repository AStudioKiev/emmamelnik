<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function trainings()
    {
        return view('trainings.index');
    }

    public function body()
    {
        return view('trainings.body');
    }

    public function business()
    {
        return view('trainings.business');
    }
}
