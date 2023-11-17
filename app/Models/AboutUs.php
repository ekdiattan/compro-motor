<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUs extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'AboutUs';

    protected $primaryKey = 'AboutUsId';

    protected $fillable = [
        'Judul',
        'Deskripsi',
        'JudulDetail',
        'DeskripsiDetail',
        'JudulKedua',
        'Nama',
        'Jabatan',
        'Message',
    ];

    const CREATED_AT = 'AboutUsCreatedAt';
    const UPDATED_AT = 'AboutUsUpdatedAt';
    const DELETED_AT = 'AboutUsDeletedAt';
}
