<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateBookkeepingIntention
 *
 * @method string getArea()
 * @method string getMobile()
 * @method string getChannel()
 * @method string getDescription()
 * @method string getToken()
 * @method string getVerifyCode()
 * @method string getUserName()
 */
class CreateBookkeepingIntentionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'companyreg',
            '2019-05-08',
            'CreateBookkeepingIntention'
        );
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->requestParameters['Area'] = $area;
        $this->queryParameters['Area'] = $area;

        return $this;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->requestParameters['Mobile'] = $mobile;
        $this->queryParameters['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

        return $this;
    }

    /**
     * @param string $verifyCode
     *
     * @return $this
     */
    public function setVerifyCode($verifyCode)
    {
        $this->requestParameters['VerifyCode'] = $verifyCode;
        $this->queryParameters['VerifyCode'] = $verifyCode;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
