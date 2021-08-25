<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Treatment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'fName',
        'lName',
        'adr1',
        'adr2',
        'city',
        'sex',
        'bDay',
        'bldGrp',
        'phnNmbr',
        'grdName',
        'grdPhnNmbr',
        'regDate',
        'refNo',
        'isActive'
    ];

    public function age()
    {
        return Carbon::parse($this->attributes['bDay'])->age;
    }

    public function Treatments()
    {
        return $this->hasMany(Treatment::class, 'patient_id')->orderBy('id', 'desc')->limit(5);
    }
}
