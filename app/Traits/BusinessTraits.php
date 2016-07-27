<?php

namespace App\Traits;

trait BusinessTraits {
    public function checkBusinessBelongsToUser($businessId) {
        return (\Auth::user()->business()->where('unique_id', $businessId)->count() !== 0);
    }
}
