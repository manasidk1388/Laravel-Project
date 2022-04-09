@include('layouts.app')

<form action="{{route('accounts.update', $account)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="container">
    <h1 class="text-center">Updation Form</h1>
    @include('accounts.form')
</div>

</form>