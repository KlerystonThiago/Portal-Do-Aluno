<?php

use Illuminate\Http\Request;

Route::resource('usuarios', 'usuarioController');
Route::resource('cursos', 'cursoController');
Route::resource('login', 'loginController');
Route::resource('disciplinas', 'disciplinaController');
Route::resource('matriculas', 'matriculaController');