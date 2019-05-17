<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAdminAccount
 *
 * @method string getAccountType()
 * @method string getAccountDescription()
 * @method string getAccountPassword()
 * @method string getAccountName()
 * @method string getDBInstanceId()
 */
class CreateAdminAccountRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'CreateAdminAccount'
        );
    }

    /**
     * @param string $accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->requestParameters['AccountType'] = $accountType;
        $this->queryParameters['AccountType'] = $accountType;

        return $this;
    }

    /**
     * @param string $accountDescription
     *
     * @return $this
     */
    public function setAccountDescription($accountDescription)
    {
        $this->requestParameters['AccountDescription'] = $accountDescription;
        $this->queryParameters['AccountDescription'] = $accountDescription;

        return $this;
    }

    /**
     * @param string $accountPassword
     *
     * @return $this
     */
    public function setAccountPassword($accountPassword)
    {
        $this->requestParameters['AccountPassword'] = $accountPassword;
        $this->queryParameters['AccountPassword'] = $accountPassword;

        return $this;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }
}
