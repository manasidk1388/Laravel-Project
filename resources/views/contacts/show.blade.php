@include('layouts.app')


<div class="container">
    <a href="{{route('contacts.index')}}"> <button class="btn btn-primary">Go back</button></a>

{{-- <h5><b>Id</b> : {{$contact->id}}</h5> --}}
<h5><b>Name</b> : {{$contact->name}}</h5>
<h5><b>Email</b> : {{$contact->email}}</h5>
<h5><b>Phone</b> : {{$contact->phone}}</h5>



</div>