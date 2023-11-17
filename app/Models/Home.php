<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'Home';

    protected $primaryKey = 'HomeId';

    protected $fillable = [
        'Name',
        'Slogan',
        'KataPengantar',
        'NamaOrang',
        'Jabatan',
        'Image',
    ];
    
    const CREATED_AT = 'HomeCreatedAt';
    const UPDATED_AT = 'HomeUpdatedAt';
    const DELETED_AT = 'HomeDeletedAt';
}
