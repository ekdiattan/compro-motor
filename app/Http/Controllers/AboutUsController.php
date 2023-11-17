<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function store(Request $request)
    {
    try{
        $user = AboutUs::create($request->all());

    }catch(\Exception $e){
        throw new \Exception($e->getMessage());
    }
        return $this->successResponse($user);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $aboutUs = AboutUs::findOrFail($id);
            $aboutUs->update($request->all());

            DB::commit();

            return $this->successResponse($aboutUs);
        } catch (\Exception $e) {
            DB::rollBack();

            return $this->sendError($e->getMessage());
        }
    }
}

