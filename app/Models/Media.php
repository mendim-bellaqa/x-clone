<?php

// app/Models/Media.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    protected $fillable = ['url']; // Add other fillable fields as needed

    /**
     * Get the owning mediable model.
     */
    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}
