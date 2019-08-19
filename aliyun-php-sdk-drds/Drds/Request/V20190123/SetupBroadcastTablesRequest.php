<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetupBroadcastTables
 *
 * @method string getDbName()
 * @method string getActive()
 * @method array getTableNames()
 * @method string getDrdsInstanceId()
 */
class SetupBroadcastTablesRequest extends \RpcAcsRequest
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
            'SetupBroadcastTables',
            'drds'
        );
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        $this->requestParameters['DbName'] = $dbName;
        $this->queryParameters['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param string $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->requestParameters['Active'] = $active;
        $this->queryParameters['Active'] = $active;

        return $this;
    }

    /**
     * @param array $tableName
     *
     * @return $this
     */
    public function setTableNames(array $tableName)
    {
        $this->requestParameters['TableNames'] = $tableName;
        foreach ($tableName as $i => $iValue) {
            $this->queryParameters['TableName.' . ($i + 1)] = $iValue;
        }

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
}
