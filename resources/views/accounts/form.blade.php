{{-- <pre>
    @php
     print_r($errors->all());

    @endphp
</pre> --}}

<div class="form-group">
    <label for=""><b> Name </b></label>

    <input type="text" class="form-control" name="user_name" value="{{$account->user_name ?? ""}}">
    <span class="text-danger">
        @error('user_name')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>First Name</b> </label>
    <input type="text" class="form-control" name="first_name" value="{{$account->first_name ?? ""}}">
    <span class="text-danger">
        @error('first_name')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Last Name </b></label>
    <input type="text" class="form-control" name="last_name" value="{{$account->last_name ?? ""}}">
    <span class="text-danger">
        @error('last_name')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Date of Birth</b></label>
    <input type="date" class="form-control" name="dob" value="{{$account->dob ?? ""}}">
    <span class="text-danger">
        @error('dob')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Phone</b></label>
    <input type="number" class="form-control" name="phone" value="{{$account->phone ?? ""}}">
    <span class="text-danger">
        @error('phone')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Email</b></label>
    <input type="email" class="form-control" name="email" value="{{$account->email ?? ""}}">
    <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for=""><b>Address</b></label>
    <input type="text" class="form-control" name="address" value="{{$account->address ?? ""}}">
    <span class="text-danger">
        @error('address')
        {{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    {{-- <input type="text" class="form-control" name="hobby"> --}}
    <label for=""><B>Hobby:-</B></label>
        <ol>
        <label for="">1. Drawing</label>
        <input type="checkbox" name="hobby[]" value="drawing" /><br>
        <label for="">2. Painting</label>
        <input type="checkbox" name="hobby[]" value="painting" /><br>
        <label for="">3. Cooking</label>
        <input type="checkbox"name="hobby[]" value="cooking" /> </ol>
</div>

<div class="form-group">
    {{-- <input type="text" class="form-control" name="gender"> --}}
    <label for=""><B>Gender:-</B></label><br>
        <ol>
        <label for="male">1. Male</label>
        <input type="radio" name="gender" value="male" {{($account->gender ?? '') == "male" ? "checked" : "" }}/><br>
        
        <label for="female">2. Female</label>
        <input type="radio" name="gender" value="female" {{($account->gender ?? '') == "female" ? "checked" : "" }}
        /><br>
     
        <label for="others">3. Others</label>
        <input type="radio" name="gender" value="others" {{($account->gender ?? '') == "others" ? "checked" : "" }}/><br>
        
        </ol>
</div>

<div class="form-group">
    <label name="country" for=""><b>Country</b></label>
    
    <select name="country" class="form-select">
        <option selected>Select Your Country</option>
        <option name="country" value="USA" {{($account->country ?? '') == "usa" ? "selected" : "" }}>USA</option>
        <option name="country" value="india" {{($account->country ?? '') == "india" ? "selected" : "" }}>India</option>
        <option name="country" value="pakistan" {{($account->country ?? '') == "pakistan" ? "selected" : "" }}>Pakistan</option>
      </select>
</div>

<div class="form-group">
    <label name="state" for=""><b>State</b></label>
    
    <select name="state" class="form-select">
        <option selected>Select Your State</option>
        <option name="state" value="goa" {{($account->state ?? '') == "goa" ? "selected" : "" }}>goa</option>
        <option name="state" value="bihar" {{($account->state ?? '') == "bihar" ? "selected" : "" }}>bihar</option>
        <option name="state" value="delhi" {{($account->state ?? '') == "delhi" ? "selected" : "" }}>Delhi</option>
      </select>
</div>

<br>
<br>
<b>***Check this if you want to Detach </b><input type="checkbox" name="checkbox" value="unknown">
<br>
<br>

                         {{-- New Account --}}

<div class="form-group row">

    <label for="contact_id" name="contact_id" value="Contact"><b>Contact</b></label>

    @php
      $contacts = DB::table('contacts')->select('name','id')->get();   
      
    @endphp
    <select class="form-control" name="contact_id">
        <option name="state" value="" >Select Contacts</option>
        @foreach($contacts as $contact)
     
        <option value="{{$contact->id}}">{{$contact->name}}
            @endforeach
        </select>
    
</div>

<input type="hidden" name="relationshipmodulename[]" value="Contact">

                         
                       {{-- next account --}}

<div class="form-group row">
   
    <label for="project_id" name="project_id" value="Project"><b>Project</b></label>

    @php
      $projects = DB::table('projects')->select('name','id')->get();   
      
    @endphp
    <select class="form-control" name="project_id">
        <option name="state" value="" >Select Projects</option>
        @foreach($projects as $project)
     
        <option value="{{$project->id}}">{{$project->name}}
            @endforeach
        </select>
</div>

<input type="hidden" name="relationshipmodulename[]" value="Project">

<br>
<button class="btn btn-primary">Submit</button>
</div>