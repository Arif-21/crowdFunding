<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Blog extends Model
{
    use UsesUuid;

    protected $guarded = [];
}
