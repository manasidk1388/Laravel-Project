@include('layouts.app')

<form action="{{route('projects.store')}}" method="POST">
@csrf

<div class="container">
    <h1 class="text-center">Registration Form</h1>
    @include('projects.form')
</form>
</div>