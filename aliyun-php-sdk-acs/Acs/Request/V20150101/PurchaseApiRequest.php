<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PurchaseApi
 *
 * @method string getServiceDate()
 * @method string getQuota()
 * @method string getOrgCode()
 * @method string getPurchaseProduct()
 * @method string getChannel()
 * @method string getPurchaseVersion()
 * @method string getPurchaseApiName()
 * @method string getBillingType()
 */
class PurchaseApiRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/Api/PurchaseApi';

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
            'PurchaseApi',
            'dsafsd'
        );
    }

    /**
     * @param string $serviceDate
     *
     * @return $this
     */
    public function setServiceDate($serviceDate)
    {
        $this->requestParameters['ServiceDate'] = $serviceDate;
        $this->queryParameters['ServiceDate'] = $serviceDate;

        return $this;
    }

    /**
     * @param string $quota
     *
     * @return $this
     */
    public function setQuota($quota)
    {
        $this->requestParameters['Quota'] = $quota;
        $this->queryParameters['Quota'] = $quota;

        return $this;
    }

    /**
     * @param string $orgCode
     *
     * @return $this
     */
    public function setOrgCode($orgCode)
    {
        $this->requestParameters['OrgCode'] = $orgCode;
        $this->queryParameters['OrgCode'] = $orgCode;

        return $this;
    }

    /**
     * @param string $purchaseProduct
     *
     * @return $this
     */
    public function setPurchaseProduct($purchaseProduct)
    {
        $this->requestParameters['PurchaseProduct'] = $purchaseProduct;
        $this->queryParameters['PurchaseProduct'] = $purchaseProduct;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $purchaseVersion
     *
     * @return $this
     */
    public function setPurchaseVersion($purchaseVersion)
    {
        $this->requestParameters['PurchaseVersion'] = $purchaseVersion;
        $this->queryParameters['PurchaseVersion'] = $purchaseVersion;

        return $this;
    }

    /**
     * @param string $purchaseApiName
     *
     * @return $this
     */
    public function setPurchaseApiName($purchaseApiName)
    {
        $this->requestParameters['PurchaseApiName'] = $purchaseApiName;
        $this->queryParameters['PurchaseApiName'] = $purchaseApiName;

        return $this;
    }

    /**
     * @param string $billingType
     *
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->requestParameters['BillingType'] = $billingType;
        $this->queryParameters['BillingType'] = $billingType;

        return $this;
    }
}
