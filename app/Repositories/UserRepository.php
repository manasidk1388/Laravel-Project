<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all() //index
    {
        return user::paginate(5);
    }

    public function create($input) //store
    {
        // $input = $request->validated();
        return user::create($input);
        // return account::all();
    }

    public function find($user) //edit or  show
    {
        // dd($account);
        return user::findorfail($user);
        
    }

    public function update($request,$user) //update
    {
        $input = $request->all();   
        $user = user::find($user);
        $user->fill($input)->save();
    }

    public function delete($user) //edit
    {
        return user::findorfail($user)->delete();
    }
}