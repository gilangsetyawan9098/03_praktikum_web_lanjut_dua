<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKomputer extends Model
{
    use HasFactory;
    protected $table = 'list_komputers';
    protected $primaryKey = 'id';
}
