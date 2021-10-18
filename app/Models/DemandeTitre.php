<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeTitre extends Model
{
    use HasFactory;

    protected $fillable=[
        "activite_id",
        "user_id",
        "site_id",
        "name",
        "first_name",
        "raison_social",
        "nationalite",
        "domicile",
        "ville",
        "lieu",
        "tel",
        "courriel",
        "fax",
        "code_postal",
        "email",
        "objet",
        "fonction_1",
        "courriel1",
        "fax1",
        "code_postal1",
        "fonction_2",
        "courriel2",
        "fax2",
        "code_postal2",
        "fonction_3",
        "courriel3",
        "fax3",
        "code_postal3",
        "fonction_4",
        "courriel4",
        "fax4",
        "code_postal4",
        "perimetre",
        "lieu_implementation",
        "file1",
        "file2",
        "file3",
        "file4",
        "file5",
        "file6",
        "file7",
        "file8",
        "file9",
        "file10",
        "file11",
        "file12",
        "file13",
        "file14"
        
    ];

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
