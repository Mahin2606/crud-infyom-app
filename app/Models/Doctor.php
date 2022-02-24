<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctor
 * @package App\Models
 * @version February 24, 2022, 8:35 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $dob
 * @property string $gender
 * @property string $country
 * @property integer $has_experience
 * @property integer $no_of_years
 * @property string $bio
 */
class Doctor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'doctors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'country',
        'has_experience',
        'no_of_years',
        'bio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'dob' => 'date',
        'gender' => 'string',
        'country' => 'string',
        'has_experience' => 'integer',
        'no_of_years' => 'integer',
        'bio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:25',
        'email' => 'required|email|unique:doctors,email',
        'phone' => 'required',
        'dob' => 'nullable|date',
        'gender' => 'required',
        'country' => 'required',
        'has_experience' => 'required|numeric',
        'no_of_years' => 'bail|nullable|required_if:has_experience,1|numeric',
        'bio' => 'nullable'
    ];

    
}
