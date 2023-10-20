<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardPrePressColor extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_pre_press_color';

    protected $guarded = [];
}
