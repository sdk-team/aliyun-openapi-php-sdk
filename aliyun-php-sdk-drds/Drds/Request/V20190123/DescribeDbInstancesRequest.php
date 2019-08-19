<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDbInstances
 *
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 * @method string getPageNumber()
 */
class DescribeDbInstancesRequest extends \RpcAcsRequest
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
            'Drds',
            '2019-01-23',
            'DescribeDbInstances',
            'drds'
        );
    }

    /**
     * @param string $search
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->requestParameters['Search'] = $search;
        $this->queryParameters['Search'] = $search;

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
     * @param string $dbInstType
     *
     * @return $this
     */
    public function setDbInstType($dbInstType)
    {
        $this->requestParameters['DbInstType'] = $dbInstType;
        $this->queryParameters['DbInstType'] = $dbInstType;

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        $this->requestParameters['DrdsInstanceId'] = $drdsInstanceId;
        $this->queryParameters['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
