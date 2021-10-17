<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable=["name","description","publication","localite","latitude","longitude","capacite","arrondissement_id","regime_id"];

    public function UploadFileSite(){
        return $this->hasMany(UploadFileSite::class);
    }

    public function SiteSourceEnergie(){
        return $this->hasMany(SiteSourceEnergie::class);
    }

    public function Regime(){
        return $this->belongsTo(Regime::class);
    }

    public function Arrondissement(){
        return $this->belongsTo(Arrondissement::class);
    }
}
