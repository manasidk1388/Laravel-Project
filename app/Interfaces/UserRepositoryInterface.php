<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function all(); //index
    public function create($input); //store
    public function find($user); //store,edit
    public function update($request,$id); //update
    public function delete($user); //destroy 
}