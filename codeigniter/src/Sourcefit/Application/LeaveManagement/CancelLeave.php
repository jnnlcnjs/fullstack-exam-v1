<?php


namespace Sourcefit\Application\LeaveManagement;


use DateTimeInterface;

/**
 * Interface CancelLeave
 * @package Sourcefit\Application\LeaveManagement
 */
interface CancelLeave
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
     * Date and time when the leave was cancelled.
     * @return DateTimeInterface
     */
    public function cancelledOn(): DateTimeInterface;
}