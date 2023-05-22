<?php

namespace CryptorgApi;

class CryptorgApiBotsFutures extends CryptorgApiRequest
{
    /**
     * Get list of all user's bots
     * @param array $params
     * @return array
     */
    public function getBotsAll(array $params): array
    {
        return $this->sendRequest('GET', '/bot-futures/all', $params);
    }

    /**
     * Get bot details
     * @param array $params
     * @return array
     */
    public function getBot(array $params): array
    {
        return $this->sendRequest('GET', '/bot-futures/detail', $params);
    }

    /**
     * Get bot logs
     * @param array $params
     * @return array
     */
    public function getBotLogs(array $params): array
    {
        return $this->sendRequest('GET', '/bot-futures/logs', $params);
    }

    /**
     * Turn on bot
     * @param array $params
     * @return array
     */
    public function activateBot(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/activate', $params);
    }

    /**
     * Turn off bot
     * @param array $params
     * @return array
     */
    public function deactivateBot(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/deactivate', $params);
    }

    /**
     * Create a new bot
     * @param array $params
     * @return array
     */
    public function createBot(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/create', $params);
    }

    /**
     * Update bot settings
     * @param array $params
     * @return array
     */
    public function updateBot(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/update', $params);
    }

    /**
     * Active deals
     * @param array $params
     * @return array
     */
    public function activeDeals(array $params): array
    {
        return $this->sendRequest('GET', '/bot-futures/active-deals', $params);
    }

    /**
     * Deals history
     * @param array $params
     * @return array
     */
    public function dealsHistory(array $params): array
    {
        return $this->sendRequest('GET', '/bot-futures/deals-history', $params);
    }

    /**
     * Start new deal
     * @param array $params
     * @return array
     */
    public function startNewDeal(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/start-new-deal', $params);
    }

    /**
     * Change Take Profit
     * @param array $params
     * @return array
     */
    public function renewTpPercentage(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/renew-tp-percentage', $params);
    }

    /**
     * Complete deal
     * @param array $params
     * @return array
     */
    public function completeDeal(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/complete-deal', $params);
    }

    /**
     * Cancel bot
     * @param array $params
     * @return array
     */
    public function cancelDeal(array $params): array
    {
        return $this->sendRequest('POST', '/bot-futures/cancel-deal', $params);
    }

    /**
     * Account information with positions
     * @return array
     */
    public function accountInformation(): array
    {
        return $this->sendRequest('POST', '/bot-futures/account-information');
    }
}
