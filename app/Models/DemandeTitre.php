<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeTitre extends Model
{
    use HasFactory;

    protected $fillable=["activite_id","user_id", "site_id"];

    public function activite(){
        return $this->belongsTo(activite::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function site(){
        return $this->belongsTo(site::class);
    }
}
