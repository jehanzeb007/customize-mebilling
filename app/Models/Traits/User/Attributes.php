<?php

namespace App\Models\Traits\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

trait Attributes
{
    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn (): string => strtoupper(substr($this->name, 0, 1)),
        );
    }
}
