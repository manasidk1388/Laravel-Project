@include('layouts.app')

<form action="{{route('contacts.store')}}" method="POST">
@csrf

<div class="container">
    <h1 class="text-center">Registration Form</h1>
    @include('contacts.form')
</form>
</div>