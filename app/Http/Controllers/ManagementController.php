<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $home = Home::all();
    }

    public function show(int $id)
    {
        $home = Home::find($id);
    }

    public function store(CreateHomeRequest $request)
    {
        $home = Home::create($request->all());
    }
    
}
