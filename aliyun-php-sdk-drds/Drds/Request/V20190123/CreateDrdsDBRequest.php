<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDrdsDB
 *
 * @method string getEncode()
 * @method string getPassword()
 * @method array getRdsSuperAccounts()
 * @method string getDbName()
 * @method string getRdsInstances()
 * @method string getType()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 */
class CreateDrdsDBRequest extends \RpcAcsRequest
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
            'CreateDrdsDB',
            'drds'
        );
    }

    /**
     * @param string $encode
     *
     * @return $this
     */
    public function setEncode($encode)
    {
        $this->requestParameters['Encode'] = $encode;
        $this->queryParameters['Encode'] = $encode;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param array $rdsSuperAccount
     *
     * @return $this
     */
    public function setRdsSuperAccounts(array $rdsSuperAccount)
    {
        $this->requestParameters['RdsSuperAccounts'] = $rdsSuperAccount;
        foreach ($rdsSuperAccount as $depth1 => $depth1Value) {
            $this->queryParameters['RdsSuperAccount.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
            $this->queryParameters['RdsSuperAccount.' . ($depth1 + 1) . '.AccountName'] = $depth1Value['AccountName'];
            $this->queryParameters['RdsSuperAccount.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

        return $this;
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
     * @param string $rdsInstances
     *
     * @return $this
     */
    public function setRdsInstances($rdsInstances)
    {
        $this->requestParameters['RdsInstances'] = $rdsInstances;
        $this->queryParameters['RdsInstances'] = $rdsInstances;

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
}
