<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : asset('images/default_not_image.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
