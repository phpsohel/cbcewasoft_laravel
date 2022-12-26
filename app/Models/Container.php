<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    protected $fillable = [
        'bl_number',
        'container_no',
        'c_size',
        'seal_no',
        'vessel_name',
        'voyage',
        'place_receipt',
        'place_loading',
        'port_discharge',
        'final_destination',
        'comidity',
        'etd',
        'eta',
        'shipped_board',
        'bl_type',
        'softDeletes',
        'issue_date',
        'location',
        'status',
    ];
    protected $table = 'containers';
}