<?php
/**
 * @author    Ecommage Team
 * Created by Thomas Nguyen.
 * @copyright Copyright (c) 25/03/2021 Ecommage (https://www.ecommage.com)
 */

namespace Backend\Model;

class AdminUser extends \Core\Mvc\Model\AbstractModel
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
    }
}