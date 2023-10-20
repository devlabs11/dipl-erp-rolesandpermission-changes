<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardSpecificDetailsCheck extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_job_card_specific_details_check';

    protected $guarded = [];
}
