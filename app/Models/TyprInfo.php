<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TyprInfo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_type',
        'name_type',
    ];
}
class Info extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_info',
        'title',
        'content',
        'other_name',
    ];
 }



