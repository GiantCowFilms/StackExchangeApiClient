<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;

/**
 * Interface SiteInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface SiteInterface
{
    /**
     * Adds related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function addRelatedSite(RelatedSiteInterface $relatedSite);

    /**
     * Removes related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function removeRelatedSite(RelatedSiteInterface $relatedSite);

    /**
     * Gets array of related sites.
     *
     * @return array<\Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    public function getRelatedSites();

    /**
     * Sets site state.
     *
     * @param string $siteState The site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'
     *
     * @return $this self Object
     */
    public function setSiteState($siteState);

    /**
     * Gets site state.
     *
     * @return string
     */
    public function getSiteState();

    /**
     * Sets site type.
     *
     * @param string $siteType The site state that can be 'main_site' or 'meta_site'
     *
     * @return $this self Object
     */
    public function setSiteType($siteType);

    /**
     * Gets site type.
     *
     * @return string
     */
    public function getSiteType();

    /**
     * Sets site url.
     *
     * @param string $siteUrl The site url
     *
     * @return $this self Object
     */
    public function setSiteUrl($siteUrl);

    /**
     * Gets site name.
     *
     * @return string
     */
    public function getSiteUrl();
}
