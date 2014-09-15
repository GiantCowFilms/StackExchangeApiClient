<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface AccessTokenInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface AccessTokenInterface
{
    /**
     * Sets access token.
     *
     * @param string $accessToken The access token
     *
     * @return $this self Object
     */
    public function setAccessToken($accessToken);

    /**
     * Gets access token.
     *
     * @return string
     */
    public function getAccessToken();

    /**
     * Sets account id.
     *
     * @param string $accountId The account id
     *
     * @return $this self Object
     */
    public function setAccountId($accountId);

    /**
     * Gets account id.
     *
     * @return string
     */
    public function getAccountId();

    /**
     * Sets expires on date.
     *
     * @param \DateTime|null $expiresOnDate The expires on date
     *
     * @return $this self Object
     */
    public function setExpiresOnDate(\DateTime $expiresOnDate);

    /**
     * Gets expires on date.
     * 
     * @return \DateTime|null
     */
    public function getExpiresOnDate();

    /**
     * Adds scope.
     * 
     * @param string $scope The scope
     *
     * @return $this self Object
     */
    public function addScope($scope);

    /**
     * Removes scope.
     * 
     * @param string $scope The scope
     *
     * @return $this self Object
     */
    public function removeScope($scope);

    /**
     * Gets scope.
     * 
     * @return string[]|null
     */
    public function getScope();
}
