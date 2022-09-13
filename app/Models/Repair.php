<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = [
        'durable_id','repair_date','repair_text','repair_user','repair_reciev_date','repair_reviev_user','repair_finish_date','repair_finich_user','repair_status'
    ];
}
