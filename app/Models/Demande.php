<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'societe',
        'adresse',
        'raisonsocial',
        'rccm',
        'ville',
        'activite',
        'username',
        'expediteur',
        'nbcompte',
        'montant',
        'nom',
        'fonction',
        'tel',
        'fax',
        'email',
        'complementaire',
        'validation',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
