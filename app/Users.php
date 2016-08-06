<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function userSettings()
    {
        return $this->hasOne(UserSettings::class);
    }
}
