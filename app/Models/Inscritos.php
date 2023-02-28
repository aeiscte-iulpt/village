<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;


class Inscritos extends Model
{
    use HasFactory;
    protected $table = 'village';
    protected $fillable = [
        'code',
        'uuid',
        'nome_quarto',
        'nome',
        'data_nascimento',
        'ndi',
        'phone',
        'phone_emerg',
        'email',
        'situacao_atual',
        'n_aluno',
        'curso',
        'ano_curricular',
        'saude',
        'nices',
        'transporte'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
            
        });
    }
}