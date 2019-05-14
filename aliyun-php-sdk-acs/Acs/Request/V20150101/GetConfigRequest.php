<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetConfig
 *
 * @method string getConfigKey()
 * @method string getAccept()
 */
class GetConfigRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/PopConfig/[ConfigKey]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetConfig'
        );
    }

    /**
     * @param string $configKey
     *
     * @return $this
     */
    public function setConfigKey($configKey)
    {
        $this->requestParameters['ConfigKey'] = $configKey;
        $this->pathParameters['ConfigKey'] = $configKey;

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->requestParameters['Accept'] = $accept;
        $this->headers['Accept'] = $accept;

        return $this;
    }
}
