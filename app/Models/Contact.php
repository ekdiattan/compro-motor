<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'Contact';

    protected $primaryKey = 'ContactId';

    protected $fillable = [
        'NamaAwal',
        'NamaAkhir',
        'Pesan',
        'Lokasi',
        'Email',
        'NomorTelepon',
        'Judul',

    ];
    
    const CREATED_AT = 'ContactCreatedAt';
    const UPDATED_AT = 'ContactUpdatedAt';
    const DELETED_AT = 'ContactDeletedAt';
}
