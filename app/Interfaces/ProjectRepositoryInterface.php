<?php

namespace App\Interfaces;

interface ProjectRepositoryInterface
{
    public function all(); //index
    public function create($input); //store
    public function find($project); //store,edit
    public function update($request,$id); //update
    public function delete($project); //destroy 
}