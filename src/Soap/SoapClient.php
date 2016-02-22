<?php

/**
 * SoapClient
 *
 * @file SoapClient.php
 * @author Consid S5 AB <henrik.soderlind@consid.se>
 * @version 2.0.0
 * @created 2015-aug-04
 */

namespace Santander\LowLevelAPI\Soap;

class SoapClient extends \SoapClient {
    private static $classmap = array(
        'GetResult' => '\Santander\LowLevelAPI\Soap\Actions\GetResult',
        'GetResultRequest' => '\Santander\LowLevelAPI\Soap\Actions\GetResultRequest',
        'GetResultResponse' => '\Santander\LowLevelAPI\Soap\Actions\GetResultResponse',
        'TestConnection' => '\Santander\LowLevelAPI\Soap\Actions\TestConnection',
        'TestConnectionRequest' => '\Santander\LowLevelAPI\Soap\Actions\TestConnectionRequest',
        'TestConnectionResponse' => '\Santander\LowLevelAPI\Soap\Actions\TestConnectionResponse',
        'GetToken' => '\Santander\LowLevelAPI\Soap\Actions\GetToken',
        'GetTokenRequest' => '\Santander\LowLevelAPI\Soap\Actions\GetTokenRequest',
        'GetTokenResult' => '\Santander\LowLevelAPI\Soap\Actions\GetTokenResult',
        'HelloWorld' => '\Santander\LowLevelAPI\Soap\Actions\HelloWorld',
        'HelloWorldResponse' => '\Santander\LowLevelAPI\Soap\Actions\HelloWorldResponse',
        'FinalizeTransaction' => '\Santander\LowLevelAPI\Soap\Actions\FinalizeTransaction',
        'GetFinalizeTransactionRequest' => '\Santander\LowLevelAPI\Soap\Actions\GetFinalizeTransactionRequest',
        'FinalizeTransactionResponse' => '\Santander\LowLevelAPI\Soap\Actions\FinalizeTransactionResponse',
        'GetFinalizeTransactionResponse' => '\Santander\LowLevelAPI\Soap\Actions\GetFinalizeTransactionResponse',
        'GetCampaignValues' => '\Santander\LowLevelAPI\Soap\Actions\GetCampaignValues',
        'GetCampaignValuesRequest' => '\Santander\LowLevelAPI\Soap\Actions\GetCampaignValuesRequest',
        'GetCampaignValuesResponse' => '\Santander\LowLevelAPI\Soap\Actions\GetCampaignValuesResponse',
        'CampaignItem' => '\Santander\LowLevelAPI\Soap\Actions\CampaignItem',
        'Authentication' => '\Santander\LowLevelAPI\Soap\Authentication',
        'Login' => '\Santander\LowLevelAPI\Soap\Login',
    );
    
    public function SoapClient($wsdl, $options = array()) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        
        parent::SoapClient($wsdl, $options);
    }
    
    /**
     * 
     * @param \Santander\LowLevelAPI\Soap\Actions\GetResult $parameters
     * @return \Santander\LowLevelAPI\Soap\Actions\GetResultResponse
     */
    public function GetResult(Actions\GetResult $parameters) {
        return $this->__soapCall('GetResult', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
    
    /**
     * 
     * @param \Santander\LowLevelAPI\Soap\Actions\TestConnection $parameters
     * @return \Santander\LowLevelAPI\Soap\Actions\TestConnectionResponse
     */
    public function TestConnection(Actions\TestConnection $parameters) {
        return $this->__soapCall('TestConnection', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
    
    /**
     * 
     * @param \Santander\LowLevelAPI\Soap\Actions\GetToken $parameters
     * @return \Santander\LowLevelAPI\Soap\Actions\GetTokenResponse
     */
    public function GetToken(Actions\GetToken $parameters) {
        return $this->__soapCall('GetToken', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
    
    /**
     * 
     * @param \Santander\soap\actions\HelloWorld $parameters
     * @return \Santander\soap\actions\HelloWorldResponse
     */
    public function HelloWorld(actions\HelloWorld $parameters) {
        return $this->__soapCall('HelloWorld', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
    
    /**
     * 
     * @param \Santander\LowLevelAPI\Soap\Actions\FinalizeTransaction $parameters
     * @return \Santander\LowLevelAPI\Soap\Actions\FinalizeTransactionResponse
     */
    public function FinalizeTransaction(Actions\FinalizeTransaction $parameters) {
        return $this->__soapCall('FinalizeTransaction', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
    
    public function GetCampaignValues(Actions\GetCampaignValues $parameters) {
        return $this->__soapCall('GetCampaignValues', array($parameters), array(
            'uri' => 'http://integration.gemoneybank.se/ws/2007/1',
            'soapaction' => '',
        ));
    }
}
