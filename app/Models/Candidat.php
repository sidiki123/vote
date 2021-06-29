<?php

namespace App\Models;

use App\Models\Concour;
use App\Models\Counter;
use Jcc\LaravelVote\Traits\Votable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;

    use Votable;

    protected $guarded = [];

    public function concour() {
        return $this->belongsTo(Concour::class,'concours_id');
    }

    public function counter() {
        return $this->belongsTo(Counter::class);
    }
}
