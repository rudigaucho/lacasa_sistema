<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class SistemaController extends Controller

{

     private $cliente;

    public function __construct(Cliente $cliente)
    {

             $this->cliente = $cliente;


    }



    public function index()
    {


        return view('index');

    }

    public function login()
    {


        return view('home');

    }

    public function cadcli()
    {


        return view('cadcli');

    }

    //Buscando todos os cliente do banco de dados
    public function buscacli(Cliente $cliente)
    {
          $clientes = $cliente->all();

        return view('buscacli',compact('clientes'));

    }



    public function buscavendas()
    {


        return view('buscavendas');

    }

    public function cadvendas()
    {


        return view('cadvendas');

    }

    public function cadastrandocliente(Request $request)
    {

         
     
        
    
    //dd($request->except(['_token']));

    //cadastrando formulario no banco   
        
        $dataForm = $request->except(['_token']);


        //regras de validação


        $this->validate($request, $this->cliente->rules);

        

        $insert = $this->cliente->insert($dataForm);



        if( $insert )
        {

            return redirect()->route('home');



        }

        else

        {

            return redirect()->back();

        }

     
     
    }     

    public function edit()
    {
          

        
    }

    
    
    public function searchcli(Request $request)
    {
       

        $pesquisa = $dataForm = $request->except(['_token']);

       return $this->where(function ($query) use ($dataForm){
       
       if (isset($dataForm['cpf']))
                   $query->where('cpf',$dataForm['cpf'] );
       
       
       })->toSql();dd($pesquisa);

    }
 
      
}
