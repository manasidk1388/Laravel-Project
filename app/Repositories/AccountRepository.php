<?php

namespace App\Repositories;

use App\Interfaces\AccountRepositoryInterface;
use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface
{
    public function all() //index
    {
        return account::paginate(5);
        // return account::all();
    }

    public function create($input) //store
    {
        // $input = $request->validated();
        return account::create($input);
        // return account::all();
    }

    public function find($account) //edit or  show
    {
        // dd($account);
        return account::findorfail($account);
        
    }

    public function update($request,$account) //update
    {
        $input = $request->all();   
        $accounts = account::find($account);
        $accounts->fill($input)->save();
    }

    public function delete($account) //edit
    {
        return account::findorfail($account)->delete();
    }
}