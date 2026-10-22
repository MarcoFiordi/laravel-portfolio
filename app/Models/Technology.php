<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model
{   
    public function projects(): BelongsToMany
    {
        return $this->BelongsToMany(Project::class);
    }
}
