<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff;


use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;
use Symfony\Component\Validator\Constraints as Assert;

class AddOrUpdateStaffRequest implements RequestInterface
{
    use DefaultRequestTrait;

    const UPDATE_ACTION_UPDATE = 'Update';
    const UPDATE_ACTION_ADD_NEW = 'AddNew';

    /**
     * @var array
     */
    private $Staff = [];

    /**
     * @var
     * @Assert\Choice({"AddNew", "Update"})
     */
    private $UpdateAction;

    public function __construct()
    {
        $this->Staff = new \stdClass();
    }

    /**
     * @return object
     */
    public function getStaff()
    {
        return $this->Staff->Staff;
    }

    /**
     * @param object $staff
     */
    public function setStaff($staff): void
    {
        $this->Staff->Staff = $staff;
    }

    /**
     * @return mixed
     */
    public function getUpdateAction()
    {
        return $this->UpdateAction;
    }

    /**
     * @param mixed $UpdateAction
     */
    public function setUpdateAction($UpdateAction): void
    {
        $this->UpdateAction = $UpdateAction;
    }

}