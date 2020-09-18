<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $allowedFields = [
        'hotelName',
        'price',
        'room',
        'meals',
        'validity',
        'location',
        'cover'
    ];

    public function getHotel($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
