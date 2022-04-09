@include('layouts.app')



{!!Form::open([
    'url' => route('accounts.store'),
    'method' => 'POST'
])!!}

@csrf

<div class="container">
    <h1 class="text-center">Registration Form</h1>
    @include('accounts.form')

</div>

{!!Form::close()!!}