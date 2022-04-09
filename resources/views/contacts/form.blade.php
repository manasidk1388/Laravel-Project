<div class="form-group">
    <label for=""><b> Name </b></label>

    <input type="text" class="form-control" name="name" value="{{$contact->name ?? ""}}">
    {{-- <span class="text-danger">  --}}
        {{-- @error('name')
        {{$message}}
        @enderror --}}
    {{-- </span> --}}
</div>

<div class="form-group">
    <label for=""><b>Phone</b></label>
    <input type="number" class="form-control" name="phone" value="{{$contact->phone ?? ""}}">
    {{-- <span class="text-danger"> --}}
        {{-- @error('phone')
        {{$message}}
        @enderror
    </span> --}}
</div>

<div class="form-group">
    <label for=""><b>Email</b></label>
    <input type="email" class="form-control" name="email" value="{{$contact->email ?? ""}}" >
   
</div>

<br>
<br>
<b>***Check this if you want to Detach </b><input type="checkbox" name="checkbox" value="unknown">
<br>
<br>

                           {{-- New Account --}}

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