<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function store(Request $request){

    try{
        $user = Home::create($request->all());

    }catch(\Exception $e){
        throw new \Exception($e->getMessage());
    }
        return $this->successResponse($user);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $home = Home::findOrFail($id);

            // $image = $request->file('Image'); 

            // if ($image) {
            //     $imageName = time() . '.' . $image->getClientOriginalExtension();

            //     $image->move(public_path('images'), $imageName);
                
            //     $home->Image = $imageName; // Changed 'image' to 'Image'
            // }   
            $home->update($request->all());

            DB::commit();

            return $this->successResponse($home);
        } catch (\Exception $e) {
            DB::rollBack();

            return $this->sendError($e->getMessage());
        }
    }
}

