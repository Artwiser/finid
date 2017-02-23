<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'news';
    public $title;
    public $lead;
    public $text;
    public $author_id;
    public $picture;

    public function __get($name)
    {
        switch ($name) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch ($name) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }
}