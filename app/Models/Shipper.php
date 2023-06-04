<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';

    protected $primaryKey = 'ShipperID';
    public $timestamps = false;
    protected $fillable = [
        'ShipperID',
        'CompanyName',
        'Phone',
        'user_id',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class, 'ShipVia', 'ShipperID');
    }


    use HasFactory;

}
