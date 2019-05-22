<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelUserEvent
 *
 * @method string getEventId()
 * @method string getResourceOwnerId()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 */
class CancelUserEventRequest extends \RpcAcsRequest
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
            'CancelUserEvent'
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
}
