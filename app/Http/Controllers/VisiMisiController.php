<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index(){
        try{
            $visiMisi = VisiMisi::first();

        } catch (\Exception $e) {

            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($visiMisi);
    }

    public function store(Request $request){
        try{
            $visiMisi = VisiMisi::create($request->all());
        } catch (\Exception $e) {

            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($visiMisi);
    }

    public function update(int $id)
    {
        try{
            $visiMisi = VisiMisi::find($id);
        }catch (\Exception $e){

            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($visiMisi);
    }

    public function destroy(int $id)
    {
        try{
            $visiMisi = VisiMisi::find($id);
        }catch (\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($visiMisi);
    }
}