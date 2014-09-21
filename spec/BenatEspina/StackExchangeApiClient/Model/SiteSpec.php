<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class SiteSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class SiteSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Site');
    }

    function it_implements_site_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface');
    }

    function its_aliases_is_mutable()
    {
        $this->getAliases()->shouldHaveCount(0);

        $this->addAlias('alias');

        $this->getAliases()->shouldHaveCount(1);

        $this->removeAlias('alias');

        $this->getAliases()->shouldHaveCount(0);
    }

    function its_api_site_parameter_is_mutable()
    {
        $this->setApiSiteParameter('api-site-parameter')->shouldReturn($this);
        $this->getApiSiteParameter()->shouldReturn('api-site-parameter');
    }

    function its_audience_is_mutable()
    {
        $this->setAudience('audience')->shouldReturn($this);
        $this->getAudience()->shouldReturn('audience');
    }

    function its_closed_beta_date_is_mutable()
    {
        $closedBetaDate = new \DateTime("@" . 1409845665);

        $this->setClosedBetaDate($closedBetaDate)->shouldReturn($this);
        $this->getClosedBetaDate()->shouldReturn($closedBetaDate);
    }

    function its_launch_date_is_mutable()
    {
        $launchDate = new \DateTime("@" . 1409845665);

        $this->setLaunchDate($launchDate)->shouldReturn($this);
        $this->getLaunchDate()->shouldReturn($launchDate);
    }

    function its_markdown_extensions_is_mutable()
    {
        $this->getMarkdownExtensions()->shouldHaveCount(0);

        $this->addMarkdownExtension('markdown-extension');

        $this->getMarkdownExtensions()->shouldHaveCount(1);

        $this->removeMarkdownExtension('markdown-extension');

        $this->getMarkdownExtensions()->shouldHaveCount(0);
    }

    function its_name_is_mutable()
    {
        $this->setName('The name')->shouldReturn($this);
        $this->getName()->shouldReturn('The name');
    }

    function its_open_beta_date_is_mutable()
    {
        $openBetaDate = new \DateTime("@" . 1409845665);

        $this->setOpenBetaDate($openBetaDate)->shouldReturn($this);
        $this->getOpenBetaDate()->shouldReturn($openBetaDate);
    }

    function its_related_site_is_mutable(RelatedSiteInterface $relatedSite)
    {
        $this->getRelatedSites()->shouldHaveCount(0);

        $this->addRelatedSite($relatedSite);

        $this->getRelatedSites()->shouldHaveCount(1);

        $this->removeRelatedSite($relatedSite);

        $this->getRelatedSites()->shouldHaveCount(0);
    }

    function its_is_not_a_valid_site_state()
    {
        $this->setSiteState('normal')->shouldReturn($this);

        $this->setSiteState('invalid-site-state')->shouldReturn($this);
        $this->getSiteState()->shouldReturn('normal');
    }

    function its_site_state_is_mutable()
    {
        $this->setSiteState('normal')->shouldReturn($this);

        $this->setSiteState('closed_beta')->shouldReturn($this);
        $this->getSiteState()->shouldReturn('closed_beta');
    }

    function its_is_not_a_valid_site_type()
    {
        $this->setSiteType('main_site')->shouldReturn($this);

        $this->setSiteType('invalid-site-type')->shouldReturn($this);
        $this->getSiteType()->shouldReturn('main_site');
    }

    function its_site_type_is_mutable()
    {
        $this->setSiteType('main_site')->shouldReturn($this);

        $this->setSiteType('meta_site')->shouldReturn($this);
        $this->getSiteType()->shouldReturn('meta_site');
    }

    function its_site_url_is_mutable()
    {
        $this->setSiteUrl('http://site-url.com')->shouldReturn($this);
        $this->getSiteUrl()->shouldReturn('http://site-url.com');
    }

    function its_styling_is_mutable(StylingInterface $styling)
    {
        $this->setStyling($styling)->shouldReturn($this);
        $this->getStyling()->shouldReturn($styling);
    }

    function its_twitter_account_is_mutable()
    {
        $this->setTwitterAccount('Twitter-account')->shouldReturn($this);
        $this->getTwitterAccount()->shouldReturn('Twitter-account');
    }
}
