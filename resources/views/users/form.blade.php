<div class="form-group">
    <label for=""><b> Name </b></label>

    <input type="text" class="form-control" name="name" value="{{$user->name ?? ""}}" >
    {{-- <span class="text-danger">  --}}
        @error('name')
        {{$message}}
        @enderror
    </span>
</div>


{{-- New Account --}}

<div class="form-group">
    <label for=""><b>Email</b></label>
    <input type="text" class="form-control" name="email" value="{{$user->email ?? ""}}">
    
        @error('email')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Password</b></label>
    <input type="password" class="form-control" name="password" value="{{$user->password ?? ""}}" >
   
</div>
<br>
<br>
<b>***Check this if you want to Detach </b><input type="checkbox" name="checkbox" value="unknown">
<br>
<br>

<div class="form-group row">

    <label for="project_id" name="project_id" value="project"><b>Project</b></label>
    
        @php
          $projects = DB::table('projects')->select('name','id')->get();   
          
        @endphp
        <select class="form-control" name="project_id">
            
            <option name="state" value="" >Select Project</option>
            @foreach($projects as $project)
         
            <option value="{{$project->id}}">{{$project->name}}
                @endforeach
            </select>
        
    </div>
    
    <input type="hidden" name="relationshipmodulename[]" value="Project">

<button class="btn btn-primary">Submit</button>
</div>