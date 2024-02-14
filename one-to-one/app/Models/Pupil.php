<?php

namespace App\Models;

use App\Models\Scholastic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pupil extends Model
{
    protected $fillable = ["name", "age", "address"];
    use HasFactory;

    public function scholastic() {
        return $this->hasOne(Scholastic::class);
    }
}
