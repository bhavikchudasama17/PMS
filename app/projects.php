<?php
// bhavik
// projects model
// 25-6-20
namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table='projects';
    protected $fillable = [
        'name', 'mid', 'vendor','desc'
    ];

}
