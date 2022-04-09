<?php

namespace App\Interfaces;

interface ContactRepositoryInterface
{
    public function all(); //index
    public function create($input); //store
    public function find($contact); //store,edit
    public function update($request,$id); //update
    public function updateApi($request,$id); //update
    public function delete($contact); //destroy 
}