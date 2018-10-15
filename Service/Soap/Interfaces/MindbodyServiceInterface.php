<?php
/**
 * Created by PhpStorm.
 * User: lsimeonov
 * Date: 5.10.18
 * Time: 20:13
 */

namespace Despark\MindbodyBundle\Service\Soap\Interfaces;


interface MindbodyServiceInterface
{
    /**
     * Adds new method implementation for the service endpoint
     * @param string $method
     * @return void
     */
    public function addMethod(string $method): void;

}