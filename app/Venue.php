<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {
    /**
     * The attribute that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
