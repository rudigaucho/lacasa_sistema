<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class  Cliente extends Model
{
   

    //Regra de validação
    
    
    public $rules = [

         'cpf'         => 'required|min:11|max:11',
         'nome'        => 'required',
         'email'       => 'required',
         'contato'     => 'required|numeric',
         'endereco'    => 'required',
         'bairro'      => 'required',
         'uf'          => 'required|min:2|max:2',


    ];
     
      
    

}
