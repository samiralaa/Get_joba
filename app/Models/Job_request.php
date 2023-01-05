<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_request extends Model
{
    use HasFactory;
    protected $fillable=[ 'email','job_id', 'fullname', 'phone', 'addres', 'cv_file', 'linkedin'];
    public function campany()
    {
        return $this->belongsTo(Campany::class);
    }
}
