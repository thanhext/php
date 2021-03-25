<?php
/**
 * @author    Ecommage Team
 * Created by Thomas Nguyen.
 * @copyright Copyright (c) 24/03/2021 Ecommage (https://www.ecommage.com)
 */
declare(strict_types=1);

namespace Backend;

class Module
{
    public function getConfig() : array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}