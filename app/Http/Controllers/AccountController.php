<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountValidation;
use App\Interfaces\AccountRepositoryInterface;
use App\Repositories\AccountRepository;

class AccountController extends Controller
{
    private AccountRepositoryInterface $accountRepoInterface;
    
    
    public function __construct(AccountRepositoryInterface $account)
    {
        $this->middleware('auth');
        $this->accountRepoInterface = $account;
    }


    public function index()
    {
        // $account = account::all();
        return view('accounts.index', ['account'=>$this->accountRepoInterface->all()]);
    // return view('accounts.index',['account'=>$this->accountRepo->all()]);
    }

    
    public function create()
    {
        // return view('accounts.create');
        return view('accounts.create')->with('success','data inserted successfully');

    }

    public function store(Request $request)
    {
        $input = $request -> validate([
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'hobby' => '',
            'gender' => '',
            'country' => '',
            'state' => ''
        ]);

        
        // dd($request->toarray());
//
        
        account::create($input);
        return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        // $account = account::find($account->id);
        // dd($accounts->user_name);
    //     return view('accounts.show', compact('accounts'));
    // return view('accounts.show',['tshow'=>$this->accountRepo->find($account)]);
    
    return view('accounts.show',['account'=>$this->accountRepoInterface->find($account->id)]);
    }

  
    public function edit(Account $account)
    {
        return view('accounts.edit',['account'=>$this->accountRepoInterface->find($account->id)]);
        // return view('accounts.edit', compact('account'));
        // echo "this is edit";
    }

    
    public function update(Request $request, Account $account)
    {
        $input = $request -> validate([
            'user_name' => '',
            'first_name' => '',
            'last_name' => '',
            'dob' => '',
            'phone' => '',
            'email' => '',
            'address' => '',
            'hobby' => '',
            'gender' => '',
            'country' => '',
            'state' => ''
        ]);
        // dd($request->toarray());
        // account::where('id', $account->id)->update($request->all('user_name','first_name','last_name','dob','phone','email','address','gender','hobby','country','state'));
        $this->accountRepoInterface->update($request, $account->id);
        return redirect() -> route('accounts.index');
    }

   
    public function destroy(Account $account)
    {
        // $account -> delete();
        account::findorFail($account->id)->delete();
        return redirect() -> route('accounts.index');
    }
}