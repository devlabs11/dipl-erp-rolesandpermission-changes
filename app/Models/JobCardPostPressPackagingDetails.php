<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardPostPressPackagingDetails extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_post_press_packaging_details';

    protected $guarded = [];
}
