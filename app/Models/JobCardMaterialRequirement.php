<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardMaterialRequirement extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbl_job_card_material_requirement';

    protected $guarded = [];
}
