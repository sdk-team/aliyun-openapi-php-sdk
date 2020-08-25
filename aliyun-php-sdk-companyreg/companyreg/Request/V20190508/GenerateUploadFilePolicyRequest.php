<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GenerateUploadFilePolicy
 *
 * @method string getFileType()
 */
class GenerateUploadFilePolicyRequest extends \RpcAcsRequest
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
            'companyreg',
            '2019-05-08',
            'GenerateUploadFilePolicy'
        );
    }

    /**
     * @param string $fileType
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->requestParameters['FileType'] = $fileType;
        $this->queryParameters['FileType'] = $fileType;

        return $this;
    }
}
