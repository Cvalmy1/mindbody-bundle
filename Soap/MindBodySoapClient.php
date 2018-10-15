<?php

namespace Despark\MindbodyBundle\Soap;

/**
 * Class MindBodySoapClient
 * @package Despark\MindbodyBundle\Soap
 */
class MindBodySoapClient extends \SoapClient
{
    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int $version
     * @param int $one_way
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        $request = $this->processRequest($request);

        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    /**
     * @return string
     */
    public function __getLastRequest()
    {
        return $this->processRequest(parent::__getLastRequest());
    }

    /**
     * @param $request
     * @return string
     */
    private function processRequest($request)
    {
        $request = preg_replace('/xmlns:ns1="(.*)"/', 'xmlns="$1"', $request);
        $request = str_replace('ns1:', '', $request);
        $request = str_replace('xsd:', '', $request);
        $request = preg_replace('/<\w+\/>/', '', $request);

        return $request;
    }
}