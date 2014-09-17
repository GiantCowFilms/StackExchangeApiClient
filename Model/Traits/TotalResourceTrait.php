<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait TotalResourceTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait TotalResourceTrait
{
    /**
     * Total accepted.
     *
     * @var int
     */
    protected $totalAccepted;

    /**
     * Total answers.
     *
     * @var int
     */
    protected $totalAnswers;

    /**
     * Total badges.
     *
     * @var int
     */
    protected $totalBadges;

    /**
     * Total comments.
     *
     * @var int
     */
    protected $totalComments;

    /**
     * Total questions.
     *
     * @var int
     */
    protected $totalQuestions;

    /**
     * Total unanswered.
     *
     * @var int
     */
    protected $totalUnanswered;

    /**
     * Total users.
     *
     * @var int
     */
    protected $totalUsers;

    /**
     * Total votes.
     *
     * @var int
     */
    protected $totalVotes;

    /**
     * Sets total accepted.
     *
     * @param int $totalAccepted The total accepted
     *
     * @return $this self Object
     */
    public function setTotalAccepted($totalAccepted)
    {
        $this->totalAccepted = $totalAccepted;

        return $this;
    }

    /**
     * Gets total accepted.
     *
     * @return int
     */
    public function getTotalAccepted()
    {
        return $this->totalAccepted;
    }

    /**
     * Sets total answers.
     *
     * @param int $totalAnswers The total answers
     *
     * @return $this self Object
     */
    public function setTotalAnswers($totalAnswers)
    {
        $this->totalAnswers = $totalAnswers;

        return $this;
    }

    /**
     * Gets total answers.
     *
     * @return int
     */
    public function getTotalAnswers()
    {
        return $this->totalAnswers;
    }

    /**
     * Sets total badges.
     *
     * @param int $totalBadges The total badges
     *
     * @return $this self Object
     */
    public function setTotalBadges($totalBadges)
    {
        $this->totalBadges = $totalBadges;

        return $this;
    }

    /**
     * Gets total badges.
     *
     * @return int
     */
    public function getTotalBadges()
    {
        return $this->totalBadges;
    }

    /**
     * Sets total comments.
     *
     * @param int $totalComments The total comments
     *
     * @return $this self Object
     */
    public function setTotalComments($totalComments)
    {
        $this->totalComments = $totalComments;

        return $this;
    }

    /**
     * Gets total comments.
     *
     * @return int
     */
    public function getTotalComments()
    {
        return $this->totalComments;
    }

    /**
     * Sets total questions.
     *
     * @param int $totalQuestions The total questions
     *
     * @return $this self Object
     */
    public function setTotalQuestions($totalQuestions)
    {
        $this->totalQuestions = $totalQuestions;

        return $this;
    }

    /**
     * Gets total questions.
     *
     * @return int
     */
    public function getTotalQuestions()
    {
        return $this->totalQuestions;
    }

    /**
     * Sets total unanswered.
     *
     * @param int $totalUnanswered The total unanswered
     *
     * @return $this self Object
     */
    public function setTotalUnanswered($totalUnanswered)
    {
        $this->totalUnanswered = $totalUnanswered;

        return $this;
    }

    /**
     * Gets total unanswered.
     *
     * @return int
     */
    public function getTotalUnanswered()
    {
        return $this->totalUnanswered;
    }

    /**
     * Sets total users.
     *
     * @param int $totalUsers The total users
     *
     * @return $this self Object
     */
    public function setTotalUsers($totalUsers)
    {
        $this->totalUsers = $totalUsers;

        return $this;
    }

    /**
     * Gets total users.
     *
     * @return int
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    /**
     * Sets total votes.
     *
     * @param int $totalVotes The total votes
     *
     * @return $this self Object
     */
    public function setTotalVotes($totalVotes)
    {
        $this->totalVotes = $totalVotes;

        return $this;
    }

    /**
     * Gets total votes.
     *
     * @return int
     */
    public function getTotalVotes()
    {
        return $this->totalVotes;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadEdit($resource)
    {
        $this->totalAccepted = Util::setIfExists($resource, 'total_accepted');
        $this->totalAnswers = Util::setIfExists($resource, 'total_answers');
        $this->totalBadges = Util::setIfExists($resource, 'total_badges');
        $this->totalComments = Util::setIfExists($resource, 'total_comments');
        $this->totalQuestions = Util::setIfExists($resource, 'total_questions');
        $this->totalUnanswered = Util::setIfExists($resource, 'total_unanswered');
        $this->totalUsers = Util::setIfExists($resource, 'total_users');
        $this->totalVotes = Util::setIfExists($resource, 'total_votes');
    }
}
