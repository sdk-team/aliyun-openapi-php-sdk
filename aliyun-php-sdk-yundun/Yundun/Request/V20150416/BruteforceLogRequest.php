<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BruteforceLog
 *
 * @method string getJstOwnerId()
 * @method string getInstanceId()
 * @method string getRecordType()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class BruteforceLogRequest extends \RpcAcsRequest
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
            'Yundun',
            '2015-04-16',
            'BruteforceLog',
            'yundun'
        );
    }

    /**
     * @param string $jstOwnerId
     *
     * @return $this
     */
    public function setJstOwnerId($jstOwnerId)
    {
        $this->requestParameters['JstOwnerId'] = $jstOwnerId;
        $this->queryParameters['JstOwnerId'] = $jstOwnerId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $recordType
     *
     * @return $this
     */
    public function setRecordType($recordType)
    {
        $this->requestParameters['RecordType'] = $recordType;
        $this->queryParameters['RecordType'] = $recordType;

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
