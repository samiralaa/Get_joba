<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['description', 'title','location', 'role_type', 'responsibilites', 'experience', 'offers', 'deleted_at', 'created_at', 'updated_at'
];
    public function campany()
    {
        return $this->belongsTo(Campany::class);
    }
}
