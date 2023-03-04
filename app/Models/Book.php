<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'judul',
        'penerbit',
        'pengarang',
        'sampul',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'judul' => 'string',
        'penerbit' => 'string',
        'pengarang' => 'string',
        'sampul' => 'string',
    ];
}
