<?php



namespace App\Traits;

use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Config;

trait AccountContactRelationshipTrait
{
    protected static function bootTraitUuid()
    {
        // dd("hello");


        static::saved(function ($model) {




            // if ($model->table == 'contacts') {

            // dd(Config::get('relationship.Account.module_name'));


            $modeldata = class_basename($model);
        
            $modeld = "relationship." . $modeldata;
        

            $var = Config::get($modeld);

            $arr = array_column($var, 'table_name');
            $arr = request()->all();
            if(isset($arr['relationshipmodulename'])){
                
            $data = ($arr['relationshipmodulename']);
            
            
            if(isset($arr['checkbox'])){

                foreach($data as $data){
                    $datalow = strtolower($data);
                    
                    
                    $datalows = $datalow . "s";
                    $data_id = $datalow . "_id";
        
                    $contact = $model::find($model->getkey());
        
                    $contact->$datalows()->detach(request()->all($data_id));
                    
                    }                
            }else{

            foreach($data as $data){
            $datalow = strtolower($data);
            
            
            $datalows = $datalow . "s";
            $data_id = $datalow . "_id";

            

            $contact = $model::find($model->getkey());

            $contact->$datalows()->attach(request()->all($data_id));
            }
            }
            



            // if ($model->table == 'accounts') {


            //     $account = $model::find($model->getkey());
            //     $account->contacts()->attach(request()->all('contact_id'));
            // }
            }
        });
    }
}