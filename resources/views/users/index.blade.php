@include('layouts.app')
<div class="container">

    <h1 style="text-align:center"><I>Users</h1>

<a href="{{route('users.create')}}"><button class="btn btn-primary">Go to Insert</button></a>


<table class="table">
    <thead>
        <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Project</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> 

        @foreach ($user as $data )
        <tr>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            
        </td>
        <td>
            @foreach ($data->projects as $project)
            {{$project->name}}<br>
            @endforeach
          </td>
          <td>
            
            <a href="{{route('users.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
            <a href="{{route('users.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

                {{-- <form action="{{route('contacts.destroy', $data->id)}}" method="POST"> --}} 
                   {!!Form::open([
                    'url'=> route('users.destroy', $data->id),
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

    {{$user->links()}}

</span>
</div>
<style>
    .w-5{
        display: none;
    }
</style>
            
