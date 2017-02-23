<?php

namespace App\Models;


use App\Model;

class Service extends Model
{
    const TABLE = 'services';
    public $title;
    public $lead;
    public $text;
    public $price_id;
    public $picture;

    public function __get($k)
    {
        switch ($k) {
            case 'price':
                return Price::findById($this->price_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'price':
                return !empty($this->price_id);
                break;
            default:
                return false;
        }
    }

}