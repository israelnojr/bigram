<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    // Setting default profile image
    public function profileImage()
    {
        $imgPath = ($this->image) ? $this->image :'uploads/profile/default.png';
        return '/storage/' . $imgPath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
