<?php

namespace CryptorgApi;

class CryptorgApiPair extends CryptorgApiRequest
{
    /**
     * Futures currency pair list
     * @return array
     */
    public function pairList(): array
    {
        return $this->sendRequest('GET', '/bot-futures/pair-list');
    }
}
