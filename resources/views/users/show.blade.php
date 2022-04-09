@include('layouts.app')


<div class="container">
    <a href="{{route('users.index')}}"> <button class="btn btn-primary">Go back</button></a>

{{-- <h5><b>id</b> : {{$user->id}}</h5> --}}
<h5><b>Name</b> : {{$user->name}}</h5>
<h5><b>Email</b> : {{$user->email}}</h5>
<h5><b>Project</b> :   @foreach ($user->projects as $project)
    {{$project->name}}<br>
    @endforeach</h5>
<h5><b>Password</b> : {{$user->password}}</h5>

</div>