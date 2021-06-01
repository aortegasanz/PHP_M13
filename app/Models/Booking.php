<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_date',
        'booking_start_date',
        'booking_end_date',
        'pax',
        'import',
        'client_id',
    ];

    public function Client() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

}
