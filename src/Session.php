<?php

namespace Aurora\Http\Session;

use Aurora\Http\Connection\Client;
use Aurora\Http\Message\Decoder;
use Aurora\Http\Message\Encoder;

class Session implements SessionInterface
{
    protected $connection;

    protected $decoder;

    protected $encoder;

    protected $transactions;

    public function __construct(Client $connection, $codec)
    {
        $this->connection = $connection;
        $this->decoder = new Decoder();
        $this->encoder = new Encoder();


    }


}