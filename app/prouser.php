<?php
// bhavik
// project assigned
// 26-6-20
namespace App;

use Illuminate\Database\Eloquent\Model;

class prouser extends Model
{
   protected $table='prouser';
   Protected $fillable=[
     'pid','uid'
];
}
