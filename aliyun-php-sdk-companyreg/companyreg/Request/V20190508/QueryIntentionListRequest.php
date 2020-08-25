<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryIntentionList
 *
 * @method string getTypeList()
 * @method string getType()
 * @method string getPageNum()
 * @method string getSortFiled()
 * @method string getPageSize()
 * @method string getSortOrder()
 * @method string getStatus()
 */
class QueryIntentionListRequest extends \RpcAcsRequest
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
            'QueryIntentionList'
        );
    }

    /**
     * @param string $typeList
     *
     * @return $this
     */
    public function setTypeList($typeList)
    {
        $this->requestParameters['TypeList'] = $typeList;
        $this->queryParameters['TypeList'] = $typeList;

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
     * @param string $sortFiled
     *
     * @return $this
     */
    public function setSortFiled($sortFiled)
    {
        $this->requestParameters['SortFiled'] = $sortFiled;
        $this->queryParameters['SortFiled'] = $sortFiled;

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
     * @param string $sortOrder
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->requestParameters['SortOrder'] = $sortOrder;
        $this->queryParameters['SortOrder'] = $sortOrder;

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
