@extends('adminlte::page')

@section('title', 'La casa')

@section('content_header')
    <h1>Busca de clientes</h1>
@stop

@section('content')
   

         <div class="box-header">
             <form method="POST" action="{{ route('searchcli') }}" class="form form-inline" >
             {!! csrf_field() !!}
                    
                    <input type="text"  name="cpf" class="form-control " placeholder="CPF">
                   
                    
                    <button type="submit" class="btn btn-primary" >Pesquisar</button>
    
             </form>
         </div>   

    <table class="table table-striped" > 
    
        <tr>
              <th>CPF</th>
              <th>NOME</th>
              <th>EMAIL</th>
              <th>CONTATO</th>
              <th>ENDEREÇO</th>
              <th>BAIRRO</th>
              <th>UF</th>
              <th>AÇÕES</th>
        </tr>

        @foreach($clientes as $cliente)
              <tr>
                 <td>{{ $cliente->cpf }}</td>
                 <td>{{ $cliente->nome }}</td>
                 <td>{{ $cliente->email }}</td>
                 <td>{{ $cliente->contato }}</td>
                 <td>{{ $cliente->endereco }}</td>
                 <td>{{ $cliente->bairro }}</td>
                 <td>{{ $cliente->uf }}</td>
                 <td>
                     <a href="">
                         <span class="glyphicon glyphicon-pencil " style="padding:6px;color:#FFF;text-decoration:none;background:#242063;"></span>
                     </a>
                     <a href="">
                        <span class="glyphicon glyphicon-trash " style="padding:6px;color:#FFF;text-decoration:none;background:#b12020;"></span>
                     </a>  
                 </td>
              </tr>
        @endforeach
    </table>  
@stop
    
    

