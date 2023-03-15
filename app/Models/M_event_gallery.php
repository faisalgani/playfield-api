<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_event_gallery extends Model
{
    use HasFactory;
    protected $keyType = 'string';
	public $incrementing = false;
	protected $table    = "event_gallery";
    protected $hidden = ['created_at','updated_at','created_by','updated_by'];
	protected $fillable = [
        'id',
        'evebt_id',
        'image',
        'video',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
	];

}
