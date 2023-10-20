<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardProcessSelectionPrePress extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_process_selection_pre_press';

    protected $guarded = [];
}
