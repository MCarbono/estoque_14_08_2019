<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    public $timestamps= false;

    protected $table = 'produto';
    protected $fillable = ['nome', 'descricao', 'preco', 'fornecedor_id'];

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }
}
