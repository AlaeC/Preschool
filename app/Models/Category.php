<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'categorie_id'; // custom primary key
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'categories';
    protected $fillable = [
        'categorie_name',
        'icon',
        'video'
    ];

    public function data()
    {
        return $this->hasMany(Data::class, 'categorie_id');
    }
}
