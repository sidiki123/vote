<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concour extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidats() {
        return $this->hasMany(Candidat::class);
    }
}
