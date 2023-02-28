<?php

Route::get('/', function () {
    return view('site.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'UserController@perfil');

Route::group(['prefix' => 'painel'], function() {

	Route::get('/', 'HomeController@painel');

	Route::group(['prefix' => 'instituicoes'], function(){

		Route::get('/', 'InstituicaoController@index');
		Route::get('/add', 'InstituicaoController@create');
		Route::post('/salvar', 'InstituicaoController@store');
		Route::get('/show/{instituicao}', 'InstituicaoController@show');
		Route::get('/edit/{instituicao}', 'InstituicaoController@edit');
		Route::post('/edit/{instituicao}', 'InstituicaoController@update');
		Route::get('/delete/{instituicao}', 'InstituicaoController@destroy');

	});

	Route::group(['prefix'=> 'users'], function(){

		Route::get('/', 'UserController@index');
		Route::get('/add', 'UserController@create');
		Route::post('/salvar', 'UserController@store');
		Route::get('/show/{user}', 'UserController@show');
		Route::get('/edit/{user}', 'UserController@edit');
		Route::post('/edit/{user}', 'UserController@update');
		Route::get('/delete/{user}', 'UserController@destroy');

	});

	Route::group(['prefix'=> 'cursos'], function(){

		Route::get('/', 'CursoController@index');
		Route::get('/add', 'CursoController@create');
		Route::post('/salvar', 'CursoController@store');
		Route::get('/show/{curso}', 'CursoController@show');
		Route::get('/edit/{curso}', 'CursoController@edit');
		Route::post('/edit/{curso}', 'CursoController@update');
		Route::get('/delete/{curso}', 'CursoController@destroy');

	});

	Route::group(['prefix'=> 'disciplinas'], function(){

		Route::get('/', 'DisciplinaController@index');
		Route::get('/add', 'DisciplinaController@create');
		Route::post('/salvar', 'DisciplinaController@store');
		Route::get('/show/{disciplina}', 'DisciplinaController@show');
		Route::get('/edit/{disciplina}', 'DisciplinaController@edit');
		Route::post('/edit/{disciplina}', 'DisciplinaController@update');
		Route::get('/delete/{disciplinas}', 'DisciplinaController@destroy');

	});

	Route::group(['prefix'=> 'turmas'], function(){

		Route::get('/', 'TurmaController@index');
		Route::get('/add', 'TurmaController@create');
		Route::post('/salvar', 'TurmaController@store');
		Route::get('/show/{turma}', 'TurmaController@show');
		Route::get('/edit/{turma}', 'TurmaController@edit');
		Route::post('/edit/{turma}', 'TurmaController@update');
		Route::get('/delete/{turma}', 'TurmaController@destroy');

	});

	Route::group(['prefix'=> 'turnos'], function(){

		Route::get('/', 'TurnoController@index');
		Route::get('/add', 'TurnoController@create');
		Route::post('/salvar', 'TurnoController@store');
		Route::get('/show/{turno}', 'TurnoController@show');
		Route::get('/edit/{turno}', 'TurnoController@edit');
		Route::post('/edit/{turno}', 'TurnoController@update');
		Route::get('/delete/{turno}', 'TurnoController@destroy');

	});

	Route::group(['prefix'=> 'materiais'], function(){

		Route::get('/', 'MaterialController@index');
		Route::get('/add', 'MaterialController@create');
		Route::post('/salvar', 'MaterialController@store');
		Route::get('/show/{material}', 'MaterialController@show');
		Route::get('/edit/{material}', 'MaterialController@edit');
		Route::post('/edit/{material}', 'MaterialController@update');
		Route::get('/delete/{material}', 'MaterialController@destroy');

	});

	Route::group(['prefix'=>'avisos'], function(){

		Route::get('/add', 'AvisoController@create');
		Route::post('/salvar', 'AvisoController@store');
		Route::get('/show/{aviso}', 'AvisoController@show');
		Route::get('/edit/{aviso}', 'AvisoController@edit');
		Route::post('/edit/{aviso}', 'AvisoController@update');
		Route::get('/delete/{aviso}', 'AvisoController@destroy');

	});

});