<?php

namespace spec\PurpleBooth\GitGitHubLint\Status;

use PhpSpec\ObjectBehavior;
use PurpleBooth\GitGitHubLint\Status\LimitTheSubjectLineTo50Characters;
use PurpleBooth\GitGitHubLint\Status\LimitTheTitleLengthTo69CharactersStatus;
use PurpleBooth\GitGitHubLint\Status\Status;

class LimitTheTitleLengthTo69CharactersStatusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LimitTheTitleLengthTo69CharactersStatus::class);
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
        $this->getMessage()->shouldReturn(
            'Please limit the subject line length of the commit message to 69 characters'
        );
    }


    function it_is_a_status()
    {
        $this->shouldImplement(Status::class);
    }


    function it_is_a_good_status()
    {
        $this->isPositive()->shouldReturn(false);
    }
}
