<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KafaActivityRecord extends Model
{

    protected $table = '_kafaactivities';
    protected $primarykey = 'id';
    protected $fillable =['ActivityName', 'ActivityLocation', 'ActivityDate', 'ActivityTime', 'ActivityDesc', 'ActivityMode', 'ActivityPeriod', 'ActivityStatus'];
    use HasFactory;


    /**
     * Get the bookings for the activity.
     */
    public function bookings()
    {
        // Define a many-to-many relationship with the same model using a pivot table
        return $this->belongsToMany(KafaActivityRecord::class, 'activity_bookings', 'activity_id', 'booked_activity_id');
    }
}

