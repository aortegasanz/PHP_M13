<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Booking;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'document',
        'city',
        'email',
        'telephone',
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

}
