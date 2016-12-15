<?php
/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated by APIMATIC v2.0 on 12/15/2016
 */

use APIMATICCalculatorLib\Http\HttpCallBack;

/**
 * An HTTPCallBack that captures the request and response for use later
 */
class HttpCallBackCatcher extends HttpCallBack {

    /**
     * Http request
     * @var APIMATICCalculatorLib\Http\HttpRequest
     */
    private $request;

    /**
     * Http Response
     * @var APIMATICCalculatorLib\Http\HttpResponse
     */
    private $response;

    /**
     * Create instance
     */
    public function __construct() {
        $instance = $this;
        parent::__construct(null, function($httpContext) use($instance) {
            $instance->request = $httpContext->getRequest();
            $instance->response = $httpContext->getResponse();
        });
    }

    /**
     * Get the HTTP Request object associated with this API call 
     * @return APIMATICCalculatorLib\Http\HttpRequest
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Get the HTTP Response object associated with this API call
     * @return APIMATICCalculatorLib\Http\HttpResponse
     */
    public function getResponse() {
        return $this->response;
    }
}
