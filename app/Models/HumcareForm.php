<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumcareForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName' ,
        'address',
        'postCode',
        'telephoneNo',
        'insuranceName',
        'dayTimeTelephone',
        'mobileTelephone',
        'dob',
        'email',
        'takeEmployment',
        'cleanLicense', 
        'employeerName',
        'employeerAddress',
        'employeerPostCode', 
        'employeerTitle', 
        'employeerDOA',
        'salary',
        'dept', 
        'dutiesDescription',
        'periodOfNotice',
        'lastDayService', 
        'reason4Leaving',
        'nameOfEmployeer2',
        'employeerAddress2',
        'employeerPostCode2',
        'employeerPostHeld2',
        'duties2',
        'reason4leaving2',
        'dutiesSummary2',
    ];
}
