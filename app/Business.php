<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function owner() {
        return User::find($this->user_id)->name;
    }

    public function businessName() {
        return $this->business_name;
    }

    public function businessDescription() {
        return $thos->business_description;
    }
}
