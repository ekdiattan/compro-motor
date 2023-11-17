<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisiMisi extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'VisiMisi';

    protected $fillable = [
        'Visi',
        'Misi',
    ];

    const CREATED_AT = 'VisiMisiCreatedAt';
    const UPDATED_AT = 'VisiMisiUpdatedAt';
    const DELETED_AT = 'VisiMisiDeletedAt';


}
