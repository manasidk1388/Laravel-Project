<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Traits\AccountContactRelationshipTrait;

class Account extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;
    use AccountContactRelationshipTrait;
    protected $fillable = ['user_name','first_name','last_name','dob','phone','email','address','hobby','gender','country','state'];
    

    public function setHobbyAttribute($value){
        
        $this->attributes['hobby'] = implode(',',$value);
    }


    public function contacts()
    {
        return $this->belongsToMany(Contact::class,'account_contact');
    }

    

    public function Projects()
    {
        return $this->belongsToMany(Project::class,'account_project');
    }
}