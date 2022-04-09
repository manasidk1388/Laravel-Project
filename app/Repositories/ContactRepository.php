<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function all() //index
    {
        return contact::paginate(5);
        // return contact::all();
    }

    public function create($input) //store
    {
        // $input = $request->validated();
        return contact::create($input);
        // return account::all();
    }

    public function find($contact) //edit or  show
    {
        // dd($account);
        return contact::findorfail($contact);
        
    }

    public function update($request,$contact) //update
    {
        $input = $request->all();   
        $contact = contact::find($contact);
        $contact->fill($input)->save();
    }

    public function delete($contact) //edit
    {
        return contact::findorfail($contact)->delete();
    }

    public function updateApi($request, $contact){
        
        $contacts = Contact::find($request);
        $updated = $contacts->update($contact);
    }

}