<?php


namespace Sourcefit\Application\LeaveManagement;

use DateTimeInterface;

/**
 * Interface ApproveLeave
 * @package Sourcefit\Application\LeaveManagement
 */
interface ApproveLeave
{


    /**
     * Unique leave identifier.
     * @return string
     */
    public function leaveId(): string;

    /**
     * Employee identifier who approved the leave.
     * @return string
     */
    public function approvedBy(): string;

    /**
     * Date and time when the leave was approved.
     * @return DateTimeInterface
     */
    public function approvedOn(): DateTimeInterface;
}