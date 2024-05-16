<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttivityController extends Controller
{
    public function index()
    {
        return view('activityindex');
    }

    public function create($id)
    {
        return view('activitycreate', ["id" => $id]);
    }
}
