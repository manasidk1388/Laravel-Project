@include('layouts.app')

<form action="{{route('users.update', $user)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="container">
        <h5 class="text-center">User</h5>
    <h1 class="text-center">Updation Form</h1>
    @include('users.form')
</div>

</form>