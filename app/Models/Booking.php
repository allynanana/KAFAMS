<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['activity_id'];

    /**
     * Get the activity that owns the booking.
     */
    public function activity()
    {
        return $this->belongsTo(KafaActivityRecord::class, 'activity_id');
    }
}
