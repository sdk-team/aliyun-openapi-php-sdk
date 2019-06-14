<?php

namespace Slb\Request\V20140515;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDomainExtension
 *
 * @method string getaccess_key_id()
 * @method string getResourceOwnerId()
 * @method string getListenerPort()
 * @method string getLoadBalancerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDomain()
 * @method string getOwnerId()
 * @method string getServerCertificateId()
 * @method string getTags()
 */
class CreateDomainExtensionRequest extends \RpcAcsRequest
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
            'CreateDomainExtension',
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
     * @param string $listenerPort
     *
     * @return $this
     */
    public function setListenerPort($listenerPort)
    {
        $this->requestParameters['ListenerPort'] = $listenerPort;
        $this->queryParameters['ListenerPort'] = $listenerPort;

        return $this;
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->requestParameters['LoadBalancerId'] = $loadBalancerId;
        $this->queryParameters['LoadBalancerId'] = $loadBalancerId;

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
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

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
     * @param string $serverCertificateId
     *
     * @return $this
     */
    public function setServerCertificateId($serverCertificateId)
    {
        $this->requestParameters['ServerCertificateId'] = $serverCertificateId;
        $this->queryParameters['ServerCertificateId'] = $serverCertificateId;

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
