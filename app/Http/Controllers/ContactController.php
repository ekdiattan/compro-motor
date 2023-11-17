<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(Request $request)
    {
    try{
        $contact = Contact::create($request->all());

    }catch(\Exception $e){
        throw new \Exception($e->getMessage());
    }
        return $this->successResponse($contact);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $contact = Contact::findOrFail($id);  
            $contact->update($request->all());
            
            DB::commit();

            return $this->successResponse($contact);
        } catch (\Exception $e) {
            DB::rollBack();

            return $this->sendError($e->getMessage());
        }
    }
}

