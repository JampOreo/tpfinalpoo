<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'rol',
        'fecha_creacion'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'fecha_creacion' => 'datetime',
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'usuario_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'usuario_id');
    }

    public function accessLogs()
    {
        return $this->hasMany(AccessLog::class, 'usuario_id');
    }
	
    public function hasRole($roles)
    {
        if (is_array($roles)) {
            return in_array($this->rol, $roles);
        }
        return $this->rol === $roles;
    }
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

}

