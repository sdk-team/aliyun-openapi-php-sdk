<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTradeIntentionUserList
 *
 * @method string getArea()
 * @method string getPageNum()
 * @method string getType()
 * @method string getPageSize()
 * @method string getBizId()
 * @method string getEnd()
 * @method string getBegin()
 * @method string getStatus()
 */
class QueryTradeIntentionUserListRequest extends \RpcAcsRequest
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
            'QueryTradeIntentionUserList'
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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->requestParameters['End'] = $end;
        $this->queryParameters['End'] = $end;

        return $this;
    }

    /**
     * @param string $begin
     *
     * @return $this
     */
    public function setBegin($begin)
    {
        $this->requestParameters['Begin'] = $begin;
        $this->queryParameters['Begin'] = $begin;

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
