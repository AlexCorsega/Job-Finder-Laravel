<?php

namespace App\Models;

use App\Models\JobTypeModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class job extends Model
{
    use HasFactory;
    // protected $fillable = ['title','tags','logo','company','location','email','description','website'];
    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags','like','%'.request('tag').'%');
        }
        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('tags','like','%'.request('search').'%');
        }
    }
    public function jobType()
    {
        return $this->belongsTo(JobTypeModel::class,'jobtype_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
