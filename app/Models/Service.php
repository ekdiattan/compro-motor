<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'Service';

    protected $primaryKey = 'ServiceId';

    protected $fillable = [
        'Judul',
        'Deskripsi',
    ];
    
    const CREATED_AT = 'ServiceCreatedAt';
    const UPDATED_AT = 'ServiceUpdatedAt';
    const DELETED_AT = 'ServiceDeletedAt';
}
