<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of WriteCommunicationLog
 *
 * @method string getNote()
 * @method string getTargetId()
 * @method string getBizId()
 */
class WriteCommunicationLogRequest extends \RpcAcsRequest
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
            'WriteCommunicationLog'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

        return $this;
    }

    /**
     * @param string $targetId
     *
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->requestParameters['TargetId'] = $targetId;
        $this->queryParameters['TargetId'] = $targetId;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }
}
