<?php
declare(strict_types = 1);
namespace PurpleBooth\GitGitHubLint;

use PurpleBooth\GitGitHubLint\Status\Status;

/**
 * A commit message
 *
 * @package PurpleBooth\GitGitHubLint
 */
interface Message
{
    /**
     * Is the title capitalised
     *
     * @return bool
     */
    public function isTitleCapitalised() : bool;

    /**
     * Get the title length
     *
     * @return int
     */
    public function getTitleLength() : int;

    /**
     * Title ends with a full stop
     *
     * @return bool
     */
    public function hasTitleAFullStop() : bool;

    /**
     * Has a gap after the title
     *
     * @return bool
     */
    public function hasBlankLineAfterTitle() : bool;

    /**
     * Has this message got a body
     *
     * @return bool
     */
    public function hasABody() : bool;

    /**
     * The length at which the message wraps
     *
     * @return int
     */
    public function getBodyWrapLength() : int;

    /**
     * Get the SHA that identifies this commit
     *
     * @return string
     */
    public function getSha() : string;

    /**
     * Get the status associated with this message
     *
     * @return Status
     */
    public function getStatus() : Status;

    /**
     * Associate a status with this message
     *
     * @param Status $status
     *
     * @return void
     */
    public function setStatus(Status $status);
}
