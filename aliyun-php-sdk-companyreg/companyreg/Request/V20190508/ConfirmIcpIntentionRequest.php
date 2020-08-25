<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConfirmIcpIntention
 *
 * @method string getBizIds()
 */
class ConfirmIcpIntentionRequest extends \RpcAcsRequest
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
            'ConfirmIcpIntention'
        );
    }

    /**
     * @param string $bizIds
     *
     * @return $this
     */
    public function setBizIds($bizIds)
    {
        $this->requestParameters['BizIds'] = $bizIds;
        $this->queryParameters['BizIds'] = $bizIds;

        return $this;
    }
}
