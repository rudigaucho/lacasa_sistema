<?php

$this->group(['middleware' => ['auth']], function(){
    $this->get('/home', 'SistemaController@login')->name('home');
    $this->get('/cadcli', 'SistemaController@cadcli')->name('cadcli');
    $this->get('/buscacli', 'SistemaController@buscacli')->name('buscacli');
    $this->get('/buscavendas', 'SistemaController@buscavendas')->name('buscavendas');
    $this->get('/cadvendas', 'SistemaController@cadvendas')->name('cadvendas');
    $this->post('/cadcli', 'SistemaController@cadastrandocliente')->name('cadastrandocliente');
    $this->post('/searchcli', 'SistemaController@searchcli')->name('searchcli');
 

});

    $this->get('/', 'SistemaController@index'); 






Auth::routes();

