<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyApiNameInDaily
 *
 * @method string getModifyName()
 * @method string getName()
 * @method string getProductName()
 * @method string getChangeId()
 * @method string getVersionName()
 */
class ModifyApiNameInDailyRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/modifyApiNameInDaily';

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
            'Acs',
            '2015-01-01',
            'ModifyApiNameInDaily',
            'dsafsd'
        );
    }

    /**
     * @param string $modifyName
     *
     * @return $this
     */
    public function setModifyName($modifyName)
    {
        $this->requestParameters['ModifyName'] = $modifyName;
        $this->queryParameters['ModifyName'] = $modifyName;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->requestParameters['ProductName'] = $productName;
        $this->queryParameters['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $changeId
     *
     * @return $this
     */
    public function setChangeId($changeId)
    {
        $this->requestParameters['ChangeId'] = $changeId;
        $this->queryParameters['ChangeId'] = $changeId;

        return $this;
    }

    /**
     * @param string $versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->requestParameters['VersionName'] = $versionName;
        $this->queryParameters['VersionName'] = $versionName;

        return $this;
    }
}
