<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KafaActivityRecord extends Model
{
    use HasFactory;

    protected $table = '_kafaactivities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ActivityName', 'ActivityLocation', 'ActivityDate', 'ActivityTime',
        'ActivityDesc', 'ActivityMode', 'ActivityPeriod', 'ActivityStatus'
    ];

    /**
     * Get the bookings for the activity.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'activity_id');
    }
}
