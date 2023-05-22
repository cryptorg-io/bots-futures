<?php

namespace CryptorgApi;

class CryptorgApiAccess extends CryptorgApiRequest
{
    /**
     * Futures Access List
     * @return array
     */
    public function accessList(): array
    {
        return $this->sendRequest('GET', '/bot-futures/access-list');
    }
}
