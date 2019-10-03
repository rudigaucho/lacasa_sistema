@extends('adminlte::page')

@section('title', 'La casa')

@section('content_header')
    <h1>Cadastro de Clientes</h1>
@stop

@section('content')
    

   

    <div class="box-body" >
              
              <!-- Mostrando erros de validação -->
              
            @if(isset ($errors) && count ($errors) > 0)
             <div class="alert alert-danger">

                 @foreach( $errors->all() as $error )
                          <p>{{ $error }}</p> 

                 @endforeach 
                  
                  
             </div>

            @endif
     
        <form method="POST" action="{{ route('cadastrandocliente') }}">
                 {!! csrf_field() !!}
          
            <div class="form-group  col-md-6">
                 <label>CPF</label><br>
                 <input type="text" name="cpf" class="form-control" value="{{old('cpf')}}" >
            </div>

            <div class="form-group  col-md-6">
                 <label>NOME</label><br>
                 <input type="text" name="nome" class="form-control" value="{{old('nome')}}">
            </div>

            <div class="form-group  col-md-6">
                 <label>EMAIL</label><br>
                 <input type="email" name="email" class="form-control" value="{{old('email')}}" >
            </div>

            <div class="form-group  col-md-6">
                 <label>CONTATO</label><br>
                 <input type="text" name="contato" class="form-control"  value="{{old('contato')}}" >
            </div>

            <div class="form-group  col-md-6">
                 <label>ENDEREÇO</label><br>
                 <input type="text" name="endereco" class="form-control" value="{{old('endereco')}}" >
            </div>

            <div class="form-group  col-md-6">
                 <label>BAIRRO</label><br>
                 <input type="text" name="bairro" class="form-control" value="{{old('bairro')}}" >
            </div>

            <div class="form-group  col-md-6">
                 <label>UF</label><br>
                 <input type="text" name="uf" class="form-control"  value="{{old('uf')}}">
            </div>

            <div class="form-group  col-md-6">
            <br><button type="submit" value="Enviar" class="btn btn-primary" id="enviar" > <span class="glyphicon glyphicon-share"> Enviar</span></button>
            </div>

        </form>
     
     
     
    </div>
@stop