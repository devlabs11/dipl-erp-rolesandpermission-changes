<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardProcessSelectionPostPress extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_process_selection_post_press';

    protected $guarded = [];
}
