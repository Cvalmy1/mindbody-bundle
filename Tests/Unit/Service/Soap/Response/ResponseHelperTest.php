<?php


namespace Despark\MindbodyBundle\Tests\Unit\Service\Soap\Response;


use Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper;
use Despark\MindbodyBundle\Tests\UnitTestCase;

class ResponseHelperTest extends UnitTestCase
{

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper
     */
    protected $responseHelper;

    protected function setUp()
    {
        parent::setUp();

        $this->responseHelper = new ResponseHelper();
    }

    public function testHydrateObject()
    {
        $source = new \stdClass();

        $source->foo = 'bar';
        $source->bar = 'baz';

        /** @var \Despark\MindbodyBundle\Tests\Unit\Service\Soap\Response\TargetStub $hydratedObject */
        $hydratedObject = $this->responseHelper->hydrateObject($source, new TargetStub());

        $this->assertEquals('bar', $hydratedObject->getFoo());
        $this->assertEquals('baz', $hydratedObject->getBar());
        $this->assertNull($hydratedObject->getBaz());
    }
}

class TargetStub
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @var string
     */
    private $bar;

    /**
     * @var string|null
     */
    private $baz;

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     */
    public function setFoo(string $foo): void
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }

    /**
     * @param string $bar
     */
    public function setBar(string $bar): void
    {
        $this->bar = $bar;
    }

    /**
     * @return null|string
     */
    public function getBaz(): ?string
    {
        return $this->baz;
    }

    /**
     * @param null|string $baz
     */
    public function setBaz(?string $baz): void
    {
        $this->baz = $baz;
    }
}