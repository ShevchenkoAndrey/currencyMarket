<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    public function users()
    {
        return $this->hasOne(Users::class);
    }
}
