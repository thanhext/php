<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Backend\Controller;

use Laminas\Mvc\MvcEvent;
use Laminas\Mvc\Controller\AbstractActionController;

abstract class AbstractBackendController extends AbstractActionController
{
    public function onDispatch(MvcEvent $e)
    {
        return parent::onDispatch($e);
    }
}