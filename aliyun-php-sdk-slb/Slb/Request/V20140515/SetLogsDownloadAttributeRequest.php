<?php

namespace Slb\Request\V20140515;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetLogsDownloadAttribute
 *
 * @method string getaccess_key_id()
 * @method string getResourceOwnerId()
 * @method string getLogType()
 * @method string getResourceOwnerAccount()
 * @method string getRoleName()
 * @method string getOwnerAccount()
 * @method string getOSSBucketName()
 * @method string getOwnerId()
 * @method string getTags()
 */
class SetLogsDownloadAttributeRequest extends \RpcAcsRequest
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
            'Slb',
            '2014-05-15',
            'SetLogsDownloadAttribute',
            'asdfdsf'
        );
    }

    /**
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        $this->requestParameters['access_key_id'] = $access_key_id;
        $this->queryParameters['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $logType
     *
     * @return $this
     */
    public function setLogType($logType)
    {
        $this->requestParameters['LogType'] = $logType;
        $this->queryParameters['LogType'] = $logType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->requestParameters['RoleName'] = $roleName;
        $this->queryParameters['RoleName'] = $roleName;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $oSSBucketName
     *
     * @return $this
     */
    public function setOSSBucketName($oSSBucketName)
    {
        $this->requestParameters['OSSBucketName'] = $oSSBucketName;
        $this->queryParameters['OSSBucketName'] = $oSSBucketName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

        return $this;
    }
}
