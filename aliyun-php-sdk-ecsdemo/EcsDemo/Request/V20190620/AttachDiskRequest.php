<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AttachDisk
 *
 * @method string getBid()
 * @method string getAid()
 */
class AttachDiskRequest extends \RpcAcsRequest
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
            'EcsDemo',
            '2019-06-20',
            'AttachDisk'
        );
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }

    /**
     * @param string $aid
     *
     * @return $this
     */
    public function setAid($aid)
    {
        $this->requestParameters['Aid'] = $aid;
        $this->queryParameters['Aid'] = $aid;

        return $this;
    }
}
