<?php

namespace App\Traits;

trait ValidationTraits {
    public function validate($data, $rules = false) {
        if (!$rules) $rules = $this->rules;
        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            $this->errors = $validator->errors();
            return false;
        }
        return true;
    }

    public function errors() {
        return $this->errors;
    }
}
