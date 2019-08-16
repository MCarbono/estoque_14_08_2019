<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model {

    use SoftDeletes;
    public $timestamps= false;

    protected $table = 'produto';
    protected $fillable = ['nome', 'descricao', 'preco', 'fornecedor_id'];

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }
}
