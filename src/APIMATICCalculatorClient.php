<?php
/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 12/15/2016
 */

namespace APIMATICCalculatorLib;

use APIMATICCalculatorLib\Controllers;

/**
 * APIMATICCalculatorLib client class
 */
class APIMATICCalculatorClient
{
 
    /**
     * Singleton access to SimpleCalculator controller
     * @return Controllers\SimpleCalculatorController The *Singleton* instance
     */
    public function getSimpleCalculator()
    {
        return Controllers\SimpleCalculatorController::getInstance();
    }
}