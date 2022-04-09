<?php

namespace App\Interfaces;

interface AccountRepositoryInterface
{
    public function all(); //index
    public function create($input); //store
    public function find($account); //store,edit
    public function update($request,$id); //update
    public function delete($account); //destroy 
}