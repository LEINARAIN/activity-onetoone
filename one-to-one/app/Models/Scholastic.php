<?php

namespace App\Models;

use App\Models\Pupil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scholastic extends Model
{
    protected $fillable = ["year", "course"];
    use HasFactory;

    public function pupil() {
        return $this->belongsTo(Pupil::class);
    }
}
