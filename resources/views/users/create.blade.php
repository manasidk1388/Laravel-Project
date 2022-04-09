@include('layouts.app')

<form action="{{route('users.store')}}" method="POST">
@csrf

<div class="container">
    <h1 class="text-center">Registration Form</h1>
    @include('users.form')
</form>
</div>