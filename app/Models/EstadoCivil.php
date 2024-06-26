<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoCivil extends Model
{
    use HasFactory,SoftDeletes;
	protected $table = 'estado_civil';
	protected $primaryKey = 'id';

	protected $fillable = [
		'estado_civil'
	];    
}
