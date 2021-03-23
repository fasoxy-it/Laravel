<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class ToDo extends Model
{
    protected $fillable = ['title', 'completed', 'description', 'user_id'];

    public function steps() {
        return $this->hasMany(Step::class);
    }
}
