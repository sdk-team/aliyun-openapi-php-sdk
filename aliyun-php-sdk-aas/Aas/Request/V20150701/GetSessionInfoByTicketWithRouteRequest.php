<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetSessionInfoByTicketWithRoute
 *
 * @method string getTicket()
 */
class GetSessionInfoByTicketWithRouteRequest extends \RpcAcsRequest
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
            'Aas',
            '2015-07-01',
            'GetSessionInfoByTicketWithRoute'
        );
    }

    /**
     * @param string $ticket
     *
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->requestParameters['Ticket'] = $ticket;
        $this->queryParameters['Ticket'] = $ticket;

        return $this;
    }
}
