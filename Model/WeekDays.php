<?php

namespace Despark\MindbodyBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class WeekDays
 * @package Despark\MindbodyBundle\Model
 */
class WeekDays
{
    /**
     * @var array
     * @Assert\Choice({1,2,3,4,5,6,7})
     */
    private $days;

    /**
     * WeekDays constructor.
     * @param array $days
     * <code> [1,3,7] = Monday, Wednesday, Sunday </code>
     */
    public function __construct(array $days)
    {
        $this->days = $days;
    }
}