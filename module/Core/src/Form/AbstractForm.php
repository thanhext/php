<?php
/**
 * @author    Ecommage Team
 * Created by Thomas Nguyen.
 * @copyright Copyright (c) 25/03/2021 Ecommage (https://www.ecommage.com)
 */

namespace Core\Mvc\Form;

use Laminas\Captcha\AdapterInterface as CaptchaAdapter;
use Laminas\Form\Element;
use Laminas\Form\Form;
use Core\Mvc\DataObject;

/**
 * Class AbstractForm
 *
 * @package Core\Mvc\Form
 */
abstract class AbstractForm extends Form
{
    public function __construct(
        CaptchaAdapter $captcha
    ) {
        parent::__construct();
        $this->prepareForm();
    }

    public function prepareForm()
    {

    }
}