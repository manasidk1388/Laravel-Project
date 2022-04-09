@include('layouts.app')

<form action="{{route('contacts.update', $contact)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="container">
    <h1 class="text-center">Updation Form</h1>
    @include('contacts.form')
</div>

</form>