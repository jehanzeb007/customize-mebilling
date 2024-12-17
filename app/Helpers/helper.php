<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

function user()
{
    return Auth::user();
}

function generateUniqueSlug($name, $modelClass, $ignoreId = null): string
{
    $slug = Str::slug($name);
    $originalSlug = $slug;
    $count = 1;

    while ($modelClass::where('slug', $slug)->where('id','!=', $ignoreId)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }
    return $slug;
}
