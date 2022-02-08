<?php

namespace App\Models;

use App\Models\Issue;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
    use HasFactory;

    protected $table = 'treatments';

    protected $fillable = [
        'patient_id',
        'diagnosis'
    ];

    protected $dates = ['created_at'];

    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function Issues()
    {
        return $this->hasMany(Issue::class, 'treatment_id');
    }
}
