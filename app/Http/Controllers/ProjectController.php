<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Interfaces\ProjectRepositoryInterface;

class ProjectController extends Controller
{
    private ProjectRepositoryInterface $projectRepoInterface;
    
    
    public function __construct(ProjectRepositoryInterface $projectRepoInterface)
    {
        $this->middleware('auth');
        $this->projectRepoInterface = $projectRepoInterface;
    }
      
    public function index()
    {
        return view('projects.index', ['project'=>$this->projectRepoInterface->all()]);
       
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        
        $input = $request -> validate([

            'name' => '',
            'description' => '',
            'date' => ''
        ]);

        $this->projectRepoInterface->create($input);
        return redirect() -> route('projects.index');

        }

   
    public function show(Project $project)
    {
        return view('projects.show',['project'=>$this->projectRepoInterface->find($project->id)]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit',['project'=>$this->projectRepoInterface->find($project->id)]);  
    }

    
    public function update(Request $request, Project $project)
    {
        $input = $request -> validate([
            'name' => '',
            'description' => '',
            'date' => ''
            
        ]);
        $this->projectRepoInterface->update($request, $project->id);
        return redirect() -> route('projects.index');
    }

    
    public function destroy(Project $project)
    {
         $this->projectRepoInterface->delete($project->id);
        return redirect() -> route('projects.index'); 
    }
}