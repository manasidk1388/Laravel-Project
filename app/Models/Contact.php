<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AccountContactRelationshipTrait;


class Contact extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;
    use AccountContactRelationshipTrait;
    protected $fillable = ['id','name',	'email','phone'];



    public function accounts(){

        return $this->belongsToMany(Account::class, 'account_contact');
    }
    
}