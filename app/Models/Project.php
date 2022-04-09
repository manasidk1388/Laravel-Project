<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AccountContactRelationshipTrait;
use App\Models\User;
// use App\Models\Account;

class Project extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;
    use AccountContactRelationshipTrait;
    protected $fillable = ['project_id','name','description','date'];

    public function Users()
    {
        return $this->belongsToMany(User::class,'project_user');
    }
    
    public function accounts()
    {
        return $this->belongsToMany(Account::class,'account_project');
    }
}