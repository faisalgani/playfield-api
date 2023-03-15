<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_partner extends Model
{
    use HasFactory;
    protected $keyType = 'string';
	public $incrementing = false;
	protected $table    = "partner";
    protected $hidden = ['created_at','updated_at','created_by','updated_by'];
	protected $fillable = [
        'id',
        'partner_name',
        'partner_logo',
        'about',
        'active',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
	];

    function partner_to_deals(){
		return $this->hasMany('App\Models\M_partner_deals','partner_id', 'id');
	}

}
