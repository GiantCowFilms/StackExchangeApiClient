<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\BenatEspina\StackExchangeApiClient\Serializer;

use BenatEspina\StackExchangeApiClient\Serializer\SerializedDataIsNotValid;
use PhpSpec\ObjectBehavior;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SerializedDataIsNotValidSpec extends ObjectBehavior
{
    function it_can_be_created()
    {
        $this->shouldHaveType(SerializedDataIsNotValid::class);
        $this->shouldHaveType(\Exception::class);
    }
}
