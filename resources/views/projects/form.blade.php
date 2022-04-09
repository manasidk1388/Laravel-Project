<div class="form-group">
    <label for=""><b> Name </b></label>

    <input type="text" class="form-control" name="name" value="{{$project->name ?? ""}}" >
    {{-- <span class="text-danger">  --}}
        @error('name')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Description</b></label>
    <input type="text" class="form-control" name="description" value="{{$project->description ?? ""}}">
    {{-- <span class="text-danger"> --}}
        @error('description')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Date</b></label>
    <input type="date" class="form-control" name="date" value="{{$project->date ?? ""}}">
   
</div>

                          {{-- New Account --}}

<div class="form-group row">

<label for="user_id" name="user_id" value="user"><b>User</b></label>

    @php
      $users = DB::table('users')->select('name','id')->get();   
      
    @endphp
    <select class="form-control" name="user_id">
        <option name="state" value="" >Select User</option>
        @foreach($users as $user)
     
        <option value="{{$user->id}}">{{$user->name}}
            @endforeach
        </select>
    
</div>

<input type="hidden" name="relationshipmodulename[]" value="User">

<br>
<br>
<b>***Check this if you want to Detach </b><input type="checkbox" name="checkbox" value="unknown">
<br>
<br>

                         {{-- next account --}}

<div class="form-group row">
   
    <label for="account_id" name="account_id" value="account"><b>Account</b></label>
    
        @php
          $accounts = DB::table('accounts')->select('user_name','id')->get();   
          
        @endphp
        <select class="form-control" name="account_id">
            <option name="state" value="" >Select Account</option>
            @foreach($accounts as $account)
         
            <option value="{{$account->id}}">{{$account->user_name}}
                @endforeach
            </select>
        
    </div>
    
    <input type="hidden" name="relationshipmodulename[]" value="Account">
    <br>
<button class="btn btn-primary">Submit</button>
</div>