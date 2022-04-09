@include('layouts.app')
<div class="container">

    <h1 style="text-align:center"><I>Projects</h1>

<a href="{{route('projects.create')}}"><button class="btn btn-primary">Go to Insert</button></a>


<table class="table">
    <thead>
        <tr>
            {{-- <th scope="col">Project_id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">User</th>
            <th scope="col">Accounts</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> 

        @foreach ($project as $data )
        <tr>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->date}}</td>
            
            
                <td>
                    @foreach ($data->Users as $user)
                    {{$user->name}}<br>
                    @endforeach
                  </td>
                  <td>
                    {{-- @dd($data) --}}
                    @foreach ($data->accounts as $account)
                    {{$account->user_name}}<br>
                    @endforeach
                  </td>
                  <td>
                <a href="{{route('projects.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
                <a href="{{route('projects.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>
                  

                    {{-- <form action="{{route('contacts.destroy', $data->id)}}" method="POST"> --}} 
                       {!!Form::open([
                        'url'=> route('projects.destroy', $data->id),
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

    {{$project->links()}}

</span>
</div>
<style>
    .w-5{
        display: none;
    }
</style>
