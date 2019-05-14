<?php

namespace Bss\Request\V20140714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeCouponList
 *
 * @method string getStartDeliveryTime()
 * @method string getPageSize()
 * @method string getEndDeliveryTime()
 * @method string getPageNum()
 * @method string getStatus()
 */
class DescribeCouponListRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Bss',
            '2014-07-14',
            'DescribeCouponList',
            'bss'
        );
    }

    /**
     * @param string $startDeliveryTime
     *
     * @return $this
     */
    public function setStartDeliveryTime($startDeliveryTime)
    {
        $this->requestParameters['StartDeliveryTime'] = $startDeliveryTime;
        $this->queryParameters['StartDeliveryTime'] = $startDeliveryTime;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $endDeliveryTime
     *
     * @return $this
     */
    public function setEndDeliveryTime($endDeliveryTime)
    {
        $this->requestParameters['EndDeliveryTime'] = $endDeliveryTime;
        $this->queryParameters['EndDeliveryTime'] = $endDeliveryTime;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
