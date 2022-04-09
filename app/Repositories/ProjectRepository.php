<?php

namespace App\Repositories;

use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function all() //index
    {
        return project::paginate(5);
    }

    public function create($input) //store
    {
        // $input = $request->validated();
        return project::create($input);
        // return account::all();
    }

    public function find($project) //edit or  show
    {
        // dd($account);
        return project::findorfail($project);
        
    }

    public function update($request,$project) //update
    {
        $input = $request->all();   
        $project = project::find($project);
        $project->fill($input)->save();
    }

    public function delete($project) //edit
    {
        return project::findorfail($project)->delete();
    }
}