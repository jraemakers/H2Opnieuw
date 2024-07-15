<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Data
 *
 * @package App\Models\Data
 * @author: Joost Raemakers <jraemakers@freedom.nl>
 */
class Data extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'waterlevel',
        'leakage',
        'valve_status',
        'temperature',
        'date',
        'time',
        'create_time',
    ];

    public $timestamps = FALSE;
}
