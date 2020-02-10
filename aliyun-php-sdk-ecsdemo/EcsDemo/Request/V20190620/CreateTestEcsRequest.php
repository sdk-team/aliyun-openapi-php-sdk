<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateTestEcs
 *
 * @method string getDailyTime()
 * @method string getNamespaceName()
 * @method string getAuthKey()
 * @method string getExtraParams()
 * @method string getChangeFreeStatus()
 * @method string getServerClientIp()
 * @method string getOnlineTime()
 * @method string getCloseTime()
 * @method string getGmtModified()
 * @method string getRelationPeople()
 * @method string getNamespaceId()
 * @method string getClientIp()
 * @method string getId()
 * @method string getProjectStatusStr()
 * @method string getCreatePeopleName()
 * @method string getMarketStr()
 * @method string getCreatePeopleBucId()
 * @method string getProjectName()
 * @method string getPlanEndTime()
 * @method string getCreatePeopleId()
 * @method string getProjectDesc()
 * @method string getChangeFreeOrderId()
 * @method string getGmtCreate()
 * @method string getMarket()
 * @method string getRequestId()
 * @method string getPreTime()
 * @method string getIdentityDTO()
 * @method string getPlanStartTime()
 * @method string getProjectStatus()
 * @method string getProperties()
 */
class CreateTestEcsRequest extends \RpcAcsRequest
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
            'CreateTestEcs'
        );
    }

    /**
     * @param string $dailyTime
     *
     * @return $this
     */
    public function setDailyTime($dailyTime)
    {
        $this->requestParameters['DailyTime'] = $dailyTime;
        $this->queryParameters['DailyTime'] = $dailyTime;

        return $this;
    }

    /**
     * @param string $namespaceName
     *
     * @return $this
     */
    public function setNamespaceName($namespaceName)
    {
        $this->requestParameters['NamespaceName'] = $namespaceName;
        $this->queryParameters['NamespaceName'] = $namespaceName;

        return $this;
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
     * @param string $changeFreeStatus
     *
     * @return $this
     */
    public function setChangeFreeStatus($changeFreeStatus)
    {
        $this->requestParameters['ChangeFreeStatus'] = $changeFreeStatus;
        $this->queryParameters['ChangeFreeStatus'] = $changeFreeStatus;

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
     * @param string $onlineTime
     *
     * @return $this
     */
    public function setOnlineTime($onlineTime)
    {
        $this->requestParameters['OnlineTime'] = $onlineTime;
        $this->queryParameters['OnlineTime'] = $onlineTime;

        return $this;
    }

    /**
     * @param string $closeTime
     *
     * @return $this
     */
    public function setCloseTime($closeTime)
    {
        $this->requestParameters['CloseTime'] = $closeTime;
        $this->queryParameters['CloseTime'] = $closeTime;

        return $this;
    }

    /**
     * @param string $gmtModified
     *
     * @return $this
     */
    public function setGmtModified($gmtModified)
    {
        $this->requestParameters['GmtModified'] = $gmtModified;
        $this->queryParameters['GmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * @param string $relationPeople
     *
     * @return $this
     */
    public function setRelationPeople($relationPeople)
    {
        $this->requestParameters['RelationPeople'] = $relationPeople;
        $this->queryParameters['RelationPeople'] = $relationPeople;

        return $this;
    }

    /**
     * @param string $namespaceId
     *
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->requestParameters['NamespaceId'] = $namespaceId;
        $this->queryParameters['NamespaceId'] = $namespaceId;

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

    /**
     * @param string $projectStatusStr
     *
     * @return $this
     */
    public function setProjectStatusStr($projectStatusStr)
    {
        $this->requestParameters['ProjectStatusStr'] = $projectStatusStr;
        $this->queryParameters['ProjectStatusStr'] = $projectStatusStr;

        return $this;
    }

    /**
     * @param string $createPeopleName
     *
     * @return $this
     */
    public function setCreatePeopleName($createPeopleName)
    {
        $this->requestParameters['CreatePeopleName'] = $createPeopleName;
        $this->queryParameters['CreatePeopleName'] = $createPeopleName;

        return $this;
    }

    /**
     * @param string $marketStr
     *
     * @return $this
     */
    public function setMarketStr($marketStr)
    {
        $this->requestParameters['MarketStr'] = $marketStr;
        $this->queryParameters['MarketStr'] = $marketStr;

        return $this;
    }

    /**
     * @param string $createPeopleBucId
     *
     * @return $this
     */
    public function setCreatePeopleBucId($createPeopleBucId)
    {
        $this->requestParameters['CreatePeopleBucId'] = $createPeopleBucId;
        $this->queryParameters['CreatePeopleBucId'] = $createPeopleBucId;

        return $this;
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->requestParameters['ProjectName'] = $projectName;
        $this->queryParameters['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $planEndTime
     *
     * @return $this
     */
    public function setPlanEndTime($planEndTime)
    {
        $this->requestParameters['PlanEndTime'] = $planEndTime;
        $this->queryParameters['PlanEndTime'] = $planEndTime;

        return $this;
    }

    /**
     * @param string $createPeopleId
     *
     * @return $this
     */
    public function setCreatePeopleId($createPeopleId)
    {
        $this->requestParameters['CreatePeopleId'] = $createPeopleId;
        $this->queryParameters['CreatePeopleId'] = $createPeopleId;

        return $this;
    }

    /**
     * @param string $projectDesc
     *
     * @return $this
     */
    public function setProjectDesc($projectDesc)
    {
        $this->requestParameters['ProjectDesc'] = $projectDesc;
        $this->queryParameters['ProjectDesc'] = $projectDesc;

        return $this;
    }

    /**
     * @param string $changeFreeOrderId
     *
     * @return $this
     */
    public function setChangeFreeOrderId($changeFreeOrderId)
    {
        $this->requestParameters['ChangeFreeOrderId'] = $changeFreeOrderId;
        $this->queryParameters['ChangeFreeOrderId'] = $changeFreeOrderId;

        return $this;
    }

    /**
     * @param string $gmtCreate
     *
     * @return $this
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->requestParameters['GmtCreate'] = $gmtCreate;
        $this->queryParameters['GmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * @param string $market
     *
     * @return $this
     */
    public function setMarket($market)
    {
        $this->requestParameters['Market'] = $market;
        $this->queryParameters['Market'] = $market;

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
     * @param string $preTime
     *
     * @return $this
     */
    public function setPreTime($preTime)
    {
        $this->requestParameters['PreTime'] = $preTime;
        $this->queryParameters['PreTime'] = $preTime;

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
     * @param string $planStartTime
     *
     * @return $this
     */
    public function setPlanStartTime($planStartTime)
    {
        $this->requestParameters['PlanStartTime'] = $planStartTime;
        $this->queryParameters['PlanStartTime'] = $planStartTime;

        return $this;
    }

    /**
     * @param string $projectStatus
     *
     * @return $this
     */
    public function setProjectStatus($projectStatus)
    {
        $this->requestParameters['ProjectStatus'] = $projectStatus;
        $this->queryParameters['ProjectStatus'] = $projectStatus;

        return $this;
    }

    /**
     * @param string $properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->requestParameters['Properties'] = $properties;
        $this->queryParameters['Properties'] = $properties;

        return $this;
    }
}
