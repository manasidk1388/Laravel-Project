<?php

namespace App\Http\Controllers\API;

use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\App;
// use App\Http\Controllers\Controller;

class SetDataController extends Controller
{
    public $successStatus = 200;
    
    private $modelPath;
    private $modelRepo;
    
public function __construct(Request $request)
{
  if (isset($request->module_name))
  {
      $this->modelPath = 'App\\Interfaces\\'.$request->module_name.'RepositoryInterface';
      $this->modelRepo = App::make($this->modelPath);
  }  
}    

public function index(){
    return $this->modelRepo->all();
}

public function create(Request $request){
    $input = $request->input_request;
    $data = $this->modelRepo->create($input);
    return json_encode($data);
}

public function show(Request $request){
    $id =$request->id;  
    $data = $this->modelRepo->find($id);
    return response()->json(['model_name'=>$request->module_name,'id'=>$request->id,'data'=>$data]);
        // return $this->modelRepo->find($request->id);
}

public function update(Request $request){
    $id = $request->id;
    $input = $request->input_request;
    $data = $this->modelRepo->updateApi($id, $input);
    
    $metadata=['id'=>$request->id,'model_name'=> $request->module_name, 'data'=>$input];
    return json_encode($metadata);
}

public function destroy(Request $request){
    $this->modelRepo->delete($request->id );
    
    $metadata=[$request->id, $request->module_name];
    return json_encode($metadata);

    
    
}
// For API
public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
return response()->json(['success'=>$success], $this-> successStatus); 
    }


    
}