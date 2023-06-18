<?php

namespace App\Models;

use App\Models\job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobTypeModel extends Model
{
    use HasFactory;
    protected $table = "JobType";
    public function jobs(): HasMany
    {
        return $this->hasMany(job::class,'jobtype_id');
    }
}
