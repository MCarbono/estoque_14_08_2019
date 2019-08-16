<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model {
    
    use SoftDeletes;

    public $timestamps = false;
    protected $table = 'fornecedor';
    protected $fillable = ['nome', 'cnpj', 'email'];
}
