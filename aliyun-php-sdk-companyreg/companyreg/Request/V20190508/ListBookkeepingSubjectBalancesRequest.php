<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListBookkeepingSubjectBalances
 *
 * @method string getPeriod()
 * @method string getYear()
 * @method string getProduceBizId()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListBookkeepingSubjectBalancesRequest extends \RpcAcsRequest
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
            'ListBookkeepingSubjectBalances'
        );
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->requestParameters['Year'] = $year;
        $this->queryParameters['Year'] = $year;

        return $this;
    }

    /**
     * @param string $produceBizId
     *
     * @return $this
     */
    public function setProduceBizId($produceBizId)
    {
        $this->requestParameters['ProduceBizId'] = $produceBizId;
        $this->queryParameters['ProduceBizId'] = $produceBizId;

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
}
