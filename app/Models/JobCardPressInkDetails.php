<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardPressInkDetails extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_press_ink_details';

    protected $guarded = [];
}
