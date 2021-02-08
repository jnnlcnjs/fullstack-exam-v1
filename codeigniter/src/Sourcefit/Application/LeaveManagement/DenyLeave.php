<?php


namespace Sourcefit\Application\LeaveManagement;


use DateTimeInterface;

/**
 * Interface DenyLeave
 * @package Sourcefit\Application\LeaveManagement
 */
interface DenyLeave
{

    /**
     * Unique leave identifier.
     * @return string
     */
    public function leaveId(): string;

    /**
     * Employee identifier who denied the leave.
     * @return string
     */
    public function deniedBy(): string;

    /**
     * Date and time when the leave was denied.
     * @return DateTimeInterface
     */
    public function deniedOn(): DateTimeInterface;
}