<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'contenido' => 'required|string',
        ]);

        $user = Auth::user();

        if (!$user->hasRole(['comentarista', 'administrador'])) {
            throw new AuthorizationException('Solo los comentaristas y administradores pueden crear comentarios.');
        }

        $comment = new Comment([
            'user_id' => $user->id,
            'post_id' => $request->post_id,
            'contenido' => $request->contenido,
        ]);
        $comment->save();

        return response()->json(['message' => 'Comentario creado'], 201);
    }

    // ... otros métodos del CommentController ...
}