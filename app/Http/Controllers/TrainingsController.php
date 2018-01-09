<?php

namespace App\Http\Controllers;

use App\PageComment;
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
        $pageComments = PageComment::wherePage('business')->get();
        return view('trainings.business', compact('pageComments'));
    }
}
