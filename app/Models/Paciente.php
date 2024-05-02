<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'enfermedad_id',
        'edad',
        'descripcion',
        'tratamiento',
        'costo',
        'cantidad-recibida',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function enfermedad()
    {
        return $this->hasMany(Enfermedad::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
