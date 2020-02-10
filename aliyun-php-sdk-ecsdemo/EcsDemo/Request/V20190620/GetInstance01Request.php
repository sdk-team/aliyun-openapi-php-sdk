<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetInstance01
 *
 * @method string getAuthKey()
 * @method string getExtraParams()
 * @method string getServerClientIp()
 * @method string getRequestId()
 * @method string getClientIp()
 * @method string getIdentityDTO()
 * @method string getId()
 */
class GetInstance01Request extends \RpcAcsRequest
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
            'EcsDemo',
            '2019-06-20',
            'GetInstance01'
        );
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->requestParameters['AuthKey'] = $authKey;
        $this->queryParameters['AuthKey'] = $authKey;

        return $this;
    }

    /**
     * @param string $extraParams
     *
     * @return $this
     */
    public function setExtraParams($extraParams)
    {
        $this->requestParameters['ExtraParams'] = $extraParams;
        $this->queryParameters['ExtraParams'] = $extraParams;

        return $this;
    }

    /**
     * @param string $serverClientIp
     *
     * @return $this
     */
    public function setServerClientIp($serverClientIp)
    {
        $this->requestParameters['ServerClientIp'] = $serverClientIp;
        $this->queryParameters['ServerClientIp'] = $serverClientIp;

        return $this;
    }

    /**
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestParameters['RequestId'] = $requestId;
        $this->queryParameters['RequestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $clientIp
     *
     * @return $this
     */
    public function setClientIp($clientIp)
    {
        $this->requestParameters['ClientIp'] = $clientIp;
        $this->queryParameters['ClientIp'] = $clientIp;

        return $this;
    }

    /**
     * @param string $identityDTO
     *
     * @return $this
     */
    public function setIdentityDTO($identityDTO)
    {
        $this->requestParameters['IdentityDTO'] = $identityDTO;
        $this->queryParameters['IdentityDTO'] = $identityDTO;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
