<?php

namespace Beedelivery\Btg;


use Beedelivery\Btg\Utils\BtgConnection;

class Account
{
    protected $http;

    /*
     * Cria uma nova instância de BtgConnection.
     *
     * @return void
     */
    public function __construct()
    {
        $this->http = new BtgConnection();
    }

    /*
     * Consulta as contas no BTG
     *
     * @return array
     */
    public function get(): array
    {
        return $this->http->get('/v1/accounts');
    }
}
