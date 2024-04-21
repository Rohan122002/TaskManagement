<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers'; // Specify the table name if it's different from the default convention

    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        // Add any other columns you want to be fillable here
    ];

    // You may want to define mutators, accessors, relationships, or other methods here as needed
}
