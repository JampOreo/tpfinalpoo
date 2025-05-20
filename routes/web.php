<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rutas de administración solo rol administrador
Route::middleware('can:isAdmin')->group(function () {
	Route::delete('/admin/posts/{post}', [AdminController::class, 'deletePost']);
	Route::delete('/admin/comments/{comment}', [AdminController::class, 'deleteComment']);
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth:sanctum', 'log.access'])->get('/dashboard', function (Request $request) {
    $user = $request->user();
    $postsCount = $user->posts()->count();
    $commentsCount = $user->comments()->count();
    $accessesCount = $user->accessLogs()->count();

    return view('dashboard.index', compact('user', 'postsCount', 'commentsCount', 'accessesCount'));
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/info', [AuthController::class, 'userInfo']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);

    Route::post('/comments', [CommentController::class, 'store']);
    Route::put('/comments/{comment}', [CommentController::class, 'update']);
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

    Route::get('/stats', [AuthController::class, 'statistics']);

    // Rutas de administración solo rol administrador
    Route::middleware('can:isAdmin')->group(function () {
        Route::delete('/admin/posts/{post}', [AdminController::class, 'deletePost']);
        Route::delete('/admin/comments/{comment}', [AdminController::class, 'deleteComment']);
    });
});

Route::get('/', function (Request $request) {
    if (Auth::check()) {
        $user = $request->user();
        $postsCount = $user->posts()->count();
        $commentsCount = $user->comments()->count();
        $accessesCount = $user->accessLogs()->count();

        return view('index', compact('user', 'postsCount', 'commentsCount', 'accessesCount'));
    } else {
        return view('welcome'); // O la vista que quieras mostrar a usuarios no autenticados
    }
})->middleware(['auth:sanctum', 'log.access']);