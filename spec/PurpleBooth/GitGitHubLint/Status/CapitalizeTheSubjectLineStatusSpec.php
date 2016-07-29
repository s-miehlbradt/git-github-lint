<?php

namespace spec\PurpleBooth\GitGitHubLint\Status;

use PhpSpec\ObjectBehavior;
use PurpleBooth\GitGitHubLint\Status\CapitalizeTheSubjectLineStatus;
use PurpleBooth\GitGitHubLint\Status\Status;

class CapitalizeTheSubjectLineStatusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CapitalizeTheSubjectLineStatus::class);
    }

    function it_has_weight_100()
    {
        $this->getWeight()->shouldReturn(100);
    }


    function it_has_success_state()
    {
        $this->getState()->shouldReturn('failure');
    }

    function it_has_message()
    {
        $this->getMessage()->shouldReturn('Please capitalise the subject line of the commit message');
    }

    function it_is_a_good_status()
    {
        $this->isPositive()->shouldReturn(false);
    }

    function it_is_a_status()
    {
        $this->shouldImplement(Status::class);
    }
}
