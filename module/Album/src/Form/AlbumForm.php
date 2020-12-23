<?php
/**
 * Created by Thomas Nguyen.
 * User: thanhnv
 * Date: 23/12/2020
 * Time: 15:32
 */

namespace Album\Form;


use Laminas\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('album');

        $this->add([
                       'name' => 'id',
                       'type' => 'hidden',
                   ]);
        $this->add([
                       'name' => 'title',
                       'type' => 'text',
                       'options' => [
                           'label' => 'Title',
                       ],
                   ]);
        $this->add([
                       'name' => 'artist',
                       'type' => 'text',
                       'options' => [
                           'label' => 'Artist',
                       ],
                   ]);
        $this->add([
                       'name' => 'submit',
                       'type' => 'submit',
                       'attributes' => [
                           'value' => 'Go',
                           'id'    => 'submitbutton',
                       ],
                   ]);
    }
}