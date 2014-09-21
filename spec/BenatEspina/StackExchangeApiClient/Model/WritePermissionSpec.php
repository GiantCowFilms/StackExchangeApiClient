<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class WritePermissionSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class WritePermissionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\WritePermission');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_write_pemission_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\WritePermissionInterface');
    }

    function its_can_add_is_mutable()
    {
        $this->setCanAdd(true)->shouldReturn($this);
        $this->canAdd()->shouldReturn(true);
    }

    function its_can_delete_is_mutable()
    {
        $this->setCanDelete(true)->shouldReturn($this);
        $this->canDelete()->shouldReturn(true);
    }

    function its_can_edit_is_mutable()
    {
        $this->setCanEdit(true)->shouldReturn($this);
        $this->canEdit()->shouldReturn(true);
    }

    function its_max_daily_actions_is_mutable()
    {
        $this->setMaxDailyActions(4)->shouldReturn($this);
        $this->getMaxDailyActions()->shouldReturn(4);
    }

    function its_min_seconds_between_actions_is_mutable()
    {
        $this->setMinSecondsBetweenActions(4)->shouldReturn($this);
        $this->getMinSecondsBetweenActions()->shouldReturn(4);
    }

    function its_object_type_is_mutable()
    {
        $this->setObjectType('object-type')->shouldReturn($this);
        $this->getObjectType()->shouldReturn('object-type');
    }
}
