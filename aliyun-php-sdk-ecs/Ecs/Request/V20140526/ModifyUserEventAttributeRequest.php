<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyUserEventAttribute
 *
 * @method string getEventId()
 * @method string getResourceOwnerId()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getNewPlanTime()
 * @method string getOwnerId()
 * @method string getNewExpireTime()
 */
class ModifyUserEventAttributeRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyUserEventAttribute',
            'ecs'
        );
    }

    /**
     * @param string $eventId
     *
     * @return $this
     */
    public function setEventId($eventId)
    {
        $this->requestParameters['EventId'] = $eventId;
        $this->queryParameters['EventId'] = $eventId;

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
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

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
     * @param string $newPlanTime
     *
     * @return $this
     */
    public function setNewPlanTime($newPlanTime)
    {
        $this->requestParameters['NewPlanTime'] = $newPlanTime;
        $this->queryParameters['NewPlanTime'] = $newPlanTime;

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
     * @param string $newExpireTime
     *
     * @return $this
     */
    public function setNewExpireTime($newExpireTime)
    {
        $this->requestParameters['NewExpireTime'] = $newExpireTime;
        $this->queryParameters['NewExpireTime'] = $newExpireTime;

        return $this;
    }
}
