@include('layouts.app')

<form action="{{route('projects.update', $project)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="container">
    <h1 class="text-center">Updation Form</h1>
    @include('projects.form')
</div>

</form>