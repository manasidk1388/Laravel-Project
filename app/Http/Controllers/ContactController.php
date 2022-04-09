<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Interfaces\ContactRepositoryInterface;
// use App\Http\Requests\ContactValidation;
// use App\Repositories\ContactRepository;

class ContactController extends Controller
{

    private ContactRepositoryInterface $contactRepoInterface;
    
    
    public function __construct(ContactRepositoryInterface $contactRepoInterface)
    {
        $this->middleware('auth');
        $this->contactRepoInterface = $contactRepoInterface;
    }
    
    public function index()
    {
        return view('contacts.index', ['contact'=>$this->contactRepoInterface->all()]);
    }

    
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
      
        $input = $request -> validate([

            'name' => '',
            'phone' => '',
            'email' => ''
        ]);

        

        $this->contactRepoInterface->create($input);
        return redirect() -> route('contacts.index');

        
    }

    
    public function show(Contact $contact)
    {
        return view('contacts.show',['contact'=>$this->contactRepoInterface->find($contact->id)]);

    }

    
    public function edit(Contact $contact)
    {
        return view('contacts.edit',['contact'=>$this->contactRepoInterface->find($contact->id)]);  
    }

    public function update(Request $request, Contact $contact)
    {
        
        $input = $request -> validate([
            'name' => '',
            'email' => '',
            'phone' => '',
            
        ]);
        $this->contactRepoInterface->update($request, $contact->id);
        return redirect() -> route('contacts.index');

        
    }

    public function destroy(Contact $contact)
    {
        $this->contactRepoInterface->delete($contact->id);
        return redirect() -> route('contacts.index');
    
    }
}