<?php
use App\Models\User;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EventoController;
use App\Models\Livro;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
}); 

Route::view('/admin', 'admin.dashboard');
Route::view('/landing', 'landing');

Route::get('/teste-orm', function (){
    User::create([
        'name' => 'Ana Clara Santos',
        'email' => 'ana.santos@escola.sp.gov.br',
        "password" => '12345678'
    ]);
    return User::all();
});

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/novo', [EventoController::class, 'create']);
Route::post('/eventos', [EventoController::class, 'store']);






Route::get('/livros', [LivroController::class, 'index']);

Route::post('/livros', [LivroController::class, 'store']);