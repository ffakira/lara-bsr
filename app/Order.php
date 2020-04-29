<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    /**
     * The attribute that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['venue_id', 'driver_id', 'order_number', 'order_at', 'ready_at', 'status'];
//    protected $visible = ['venue_id', 'order_number', 'order_at', 'ready_at', 'status'];
    protected $with = ['venue', 'driver'];

    public function venue() {
        return $this->belongsTo(Venue::class);
    }

    public function driver() {
        return $this->belongsTo(Driver::class);
    }
}
