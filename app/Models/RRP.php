<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RRP extends Model
{
    use HasFactory;
    protected $table = "rrp_tbl";
    protected $primaryKey = "rrp_id";
    protected $guarded = [];
}
