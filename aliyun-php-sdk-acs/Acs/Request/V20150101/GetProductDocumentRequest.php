<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetProductDocument
 *
 * @method string getSite()
 * @method string getIsDraft()
 * @method string getProductName()
 * @method string getLanguage()
 * @method string getAccept()
 */
class GetProductDocumentRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/ProductDocument/[ProductName]/[Language]/[Site]/[IsDraft]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetProductDocument'
        );
    }

    /**
     * @param string $site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->requestParameters['Site'] = $site;
        $this->pathParameters['Site'] = $site;

        return $this;
    }

    /**
     * @param string $isDraft
     *
     * @return $this
     */
    public function setIsDraft($isDraft)
    {
        $this->requestParameters['IsDraft'] = $isDraft;
        $this->pathParameters['IsDraft'] = $isDraft;

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
        $this->pathParameters['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->requestParameters['Language'] = $language;
        $this->pathParameters['Language'] = $language;

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->requestParameters['Accept'] = $accept;
        $this->headers['Accept'] = $accept;

        return $this;
    }
}
