@include('layouts.app')
<div class="container">
    
    <h1 style="text-align:center"><I>Contacts</h1>

<a href="{{route('contacts.create')}}"><button class="btn btn-primary">Go to Insert</button></a>


<table class="table">
    <thead>
        <tr>
            {{-- <th scope="col">Contact_id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Accounts</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> 

        @foreach ($contact as $data )
        <tr>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            
           
                <td>
                    {{-- @dd($data) --}}
                    @foreach ($data->accounts as $account)
                    {{$account->user_name}}<br>
                    @endforeach
                  </td>
                <td>
                <a href="{{route('contacts.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
                <a href="{{route('contacts.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

                    {{-- <form action="{{route('contacts.destroy', $data->id)}}" method="POST"> --}} 
                       {!!Form::open([
                        'url'=> route('contacts.destroy', $data->id),
                        'method' => 'POST'
                      ])!!}
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Delete</button>
                    {{-- // </form> --}}
                    {!!form::close()!!} 
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<span>

    {{$contact->links()}}

</span>
</div>
<style>
    .w-5{
        display: none;
    }
</style>