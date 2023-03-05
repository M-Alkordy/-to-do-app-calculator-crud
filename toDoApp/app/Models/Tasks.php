<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasks extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'description',
        'completed_at',
    ];

    public function isCompleted() {
        return $this->completed_at !== null;
    }
}
