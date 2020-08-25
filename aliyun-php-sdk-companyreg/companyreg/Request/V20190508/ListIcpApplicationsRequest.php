<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListIcpApplications
 *
 * @method string getIntentionBizId()
 * @method string getType()
 * @method string getApplicationStatus()
 * @method string getPageNumber()
 * @method string getCompanyName()
 * @method string getPageSize()
 * @method string getSortOrder()
 * @method string getSortField()
 */
class ListIcpApplicationsRequest extends \RpcAcsRequest
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
            'ListIcpApplications'
        );
    }

    /**
     * @param string $intentionBizId
     *
     * @return $this
     */
    public function setIntentionBizId($intentionBizId)
    {
        $this->requestParameters['IntentionBizId'] = $intentionBizId;
        $this->queryParameters['IntentionBizId'] = $intentionBizId;

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
     * @param string $applicationStatus
     *
     * @return $this
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->requestParameters['ApplicationStatus'] = $applicationStatus;
        $this->queryParameters['ApplicationStatus'] = $applicationStatus;

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
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->requestParameters['CompanyName'] = $companyName;
        $this->queryParameters['CompanyName'] = $companyName;

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
     * @param string $sortField
     *
     * @return $this
     */
    public function setSortField($sortField)
    {
        $this->requestParameters['SortField'] = $sortField;
        $this->queryParameters['SortField'] = $sortField;

        return $this;
    }
}
