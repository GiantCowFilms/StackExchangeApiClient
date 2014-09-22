<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use BenatEspina\StackExchangeApiClient\Model\RelatedSite;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait SiteTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait SiteTrait
{
    /**
     * An array of related sites.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    protected $relatedSites = array();

    /**
     * Site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'.
     *
     * @var string
     */
    protected $siteState;

    /**
     * Site type that can be 'main_site' or 'meta_site'.
     *
     * @var string
     */
    protected $siteType;

    /**
     * Site url.
     *
     * @var string
     */
    protected $siteUrl;

    /**
     * Adds related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function addRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites[] = $relatedSite;

        return $this;
    }

    /**
     * Removes related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function removeRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites = Util::removeElement($relatedSite, $this->relatedSites);

        return $this;
    }

    /**
     * Gets array of related sites.
     *
     * @return array<\Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    public function getRelatedSites()
    {
        return $this->relatedSites;
    }

    /**
     * Sets site state.
     *
     * @param string $siteState The site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'
     *
     * @return $this self Object
     */
    public function setSiteState($siteState)
    {
        if (Util::coincidesElement(
            $siteState, array('closed_beta', 'linked_meta', 'normal', 'open_beta')
        ) === true
        ) {
            $this->siteState = $siteState;
        }

        return $this;
    }

    /**
     * Gets site state.
     *
     * @return string
     */
    public function getSiteState()
    {
        return $this->siteState;
    }

    /**
     * Sets site type.
     *
     * @param string $siteType The site state that can be 'main_site' or 'meta_site'
     *
     * @return $this self Object
     */
    public function setSiteType($siteType)
    {
        if (Util::coincidesElement($siteType, array('main_site', 'meta_site')) === true) {
            $this->siteType = $siteType;
        }

        return $this;
    }

    /**
     * Gets site type.
     *
     * @return string
     */
    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * Sets site url.
     *
     * @param string $siteUrl The site url
     *
     * @return $this self Object
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Gets site name.
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource       The resource
     * @param string[]     $stateConstants The array of site state constants
     * @param string[]     $typeConstants  The array of site type constants
     *
     * @return void
     */
    protected function loadSite($resource, $stateConstants, $typeConstants)
    {
        $sites = Util::setIfArrayExists($resource, 'related_sites');
        foreach ($sites as $site) {
            $this->relatedSites[] = new RelatedSite($site);
        }
        $this->siteState = Util::isEqual($resource, 'site_state', $stateConstants);
        $this->siteType = Util::isEqual($resource, 'site_type', $typeConstants);
        $this->siteUrl = Util::setIfStringExists($resource, 'site_url');
    }
}
