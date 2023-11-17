<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
    try{
       $service = Service::create($request->all());

    }catch(\Exception $e){
        throw new \Exception($e->getMessage());
    }
        return $this->successResponse($service);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

           $service = Service::findOrFail($id);  
           $service->update($request->all());
            
            DB::commit();

            return $this->successResponse($service);
        } catch (\Exception $e) {
            DB::rollBack();

            return $this->sendError($e->getMessage());
        }
    }

    public function destroy(int $id)
    {

        try{
            DB::beginTransaction();
            $service = Service::findOrFail($id);
            $service->delete(); 
            return $this->successResponse($service);

        } catch (\Exception $e) {
            DB::commit();
            return $this->sendError($e->getMessage());

        }
        DB::rollBack();
    }

}

