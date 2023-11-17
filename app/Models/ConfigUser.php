<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigUser extends Model
{
    use HasFactory;

    protected $table = 'configuser';
    protected $primaryKey = 'ConfigUserId';


    protected $fillable = [
        'Name',
        'email',
        'password',
    ];

    const CREATED_AT = 'ConfigUserCreatedAt';
    const UPDATED_AT = 'ConfigUserUpdatedAt';
    const DELETED_AT = 'ConfigUserDeletedAt';
}
