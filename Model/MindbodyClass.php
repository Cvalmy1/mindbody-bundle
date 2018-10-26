<?php

namespace Despark\MindbodyBundle\Model;

use Despark\MindbodyBundle\Model\Traits\MindbodyClassTrait;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestDateTime;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestLastModifiedDateTime;

/**
 * Class MindbodyClass
 */
class MindbodyClass implements MindbodyClassInterface
{
    use MindbodyClassTrait, RequestDateTime, RequestLastModifiedDateTime;
}