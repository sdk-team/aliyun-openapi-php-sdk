<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAliyunAccount
 *
 * @method string getAliyunId()
 */
class CreateAliyunAccountRequest extends \RpcAcsRequest
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
            'CreateAliyunAccount',
            'aas'
        );
    }

    /**
     * @param string $aliyunId
     *
     * @return $this
     */
    public function setAliyunId($aliyunId)
    {
        $this->requestParameters['AliyunId'] = $aliyunId;
        $this->queryParameters['AliyunId'] = $aliyunId;

        return $this;
    }
}
