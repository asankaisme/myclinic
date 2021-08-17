<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Issue extends Model
{
    use HasFactory;

    protected $table = 'issues';

    protected $fillable = [
        'treatment_id',
        'drug_id',
        'isdQty',
        'isActive'
    ];
    
    public function Treatment()
    {
        return $this->belongsTo(Treatment::class);
    }
}
