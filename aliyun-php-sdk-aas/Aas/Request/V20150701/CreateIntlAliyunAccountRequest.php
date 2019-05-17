<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateIntlAliyunAccount
 *
 * @method string getNationalityCode()
 */
class CreateIntlAliyunAccountRequest extends \RpcAcsRequest
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
            'Aas',
            '2015-07-01',
            'CreateIntlAliyunAccount'
        );
    }

    /**
     * @param string $nationalityCode
     *
     * @return $this
     */
    public function setNationalityCode($nationalityCode)
    {
        $this->requestParameters['NationalityCode'] = $nationalityCode;
        $this->queryParameters['NationalityCode'] = $nationalityCode;

        return $this;
    }
}
