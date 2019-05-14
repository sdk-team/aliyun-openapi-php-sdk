<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutVersionDocument
 *
 * @method string getContentLength()
 * @method string getBodyContent()
 * @method string getSite()
 * @method string getContentMD5()
 * @method string getProductName()
 * @method string getContentType()
 * @method string getLanguage()
 * @method string getVersionName()
 * @method string getAccept()
 */
class PutVersionDocumentRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/VersionDocument/[ProductName]/[VersionName]/[Language]/[Site]';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'PutVersionDocument'
        );
    }

    /**
     * @param string $contentLength
     *
     * @return $this
     */
    public function setContentLength($contentLength)
    {
        $this->requestParameters['ContentLength'] = $contentLength;
        $this->headers['Content-Length'] = $contentLength;

        return $this;
    }

    /**
     * @param string $bodyContent
     *
     * @return $this
     */
    public function setBodyContent($bodyContent)
    {
        $this->requestParameters['BodyContent'] = $bodyContent;
        $this->queryParameters['BodyContent'] = $bodyContent;

        return $this;
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
     * @param string $contentMD5
     *
     * @return $this
     */
    public function setContentMD5($contentMD5)
    {
        $this->requestParameters['ContentMD5'] = $contentMD5;
        $this->headers['Content-MD5'] = $contentMD5;

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
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->requestParameters['ContentType'] = $contentType;
        $this->headers['Content-Type'] = $contentType;

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
     * @param string $versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->requestParameters['VersionName'] = $versionName;
        $this->pathParameters['VersionName'] = $versionName;

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
