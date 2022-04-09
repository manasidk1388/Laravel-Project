@include('layouts.app')


<div class="container">
    <a href="{{route('projects.index')}}"> <button class="btn btn-primary">Go back</button></a>

{{-- <h5><b>id</b> : {{$project->id}}</h5> --}}
<h5><b>Name</b> : {{$project->name}}</h5>
<h5><b>Description</b> : {{$project->description}}</h5>
<h5><b>Date</b> : {{$project->date}}</h5>

</div>

