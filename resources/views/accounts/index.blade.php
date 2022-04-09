@include('layouts.app')
<div class="container">

    <h1 style="text-align:center;"><I>Accounts</h1>

    <a href="{{route('accounts.create')}}"><button class="btn btn-primary">Go to Insert</button></a>


<table class="table">
    <thead>
        <tr>
            {{-- <th scope="col">Id</th> --}}
            <th scope="col">User Name</th>
            {{-- <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date of Birth</th> --}}
            {{-- <th scope="col">Phone</th> --}}
            <th scope="col">Email</th>
            {{-- <th scope="col">Address</th>
            <th scope="col">Hobby</th>
            <th scope="col">Gender</th>
            <th scope="col">Country</th>
            <th scope="col">State</th> --}}
            <th scope="col">Contacts</th>
            <th scope="col">Projects</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> 

        @foreach ($account as $data )
        <tr>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->user_name}}</td>
            {{-- <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->dob}}</td>
            <td>{{$data->phone}}</td> --}}
            <td>{{$data->email}}</td>
            {{-- <td>{{$data->address}}</td>
            <td>{{$data->hobby}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->country}}</td>
            <td>{{$data->state}}</td> --}}

            <td>
                @foreach ($data->contacts as $contact)
                {{$contact->name}}<br>
                @endforeach
              </td>
              
            <td>
                @foreach ($data->Projects as $project)
                {{$project->name}}<br>
                @endforeach
              </td>
            <td>
                <a href="{{route('accounts.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
                <a href="{{route('accounts.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

                    {{-- <form action="{{route('accounts.destroy', $data->id)}}" method="POST"> --}}
                      {!!Form::open([
                        'url'=> route('accounts.destroy', $data->id),
                        'method' => 'POST'
                      ])!!}
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Delete</button>
                    {{-- </form> --}}
                    {!!form::close()!!}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


<span>

    {{$account->links()}}

</span>
</div>
<style>
    .w-5{
        
        display: none;
    }
</style>
