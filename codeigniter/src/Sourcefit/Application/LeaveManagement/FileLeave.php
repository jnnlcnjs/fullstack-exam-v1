<?php

namespace Sourcefit\Application\LeaveManagement;


use DateTimeInterface;

/**
 * Interface FileLeave
 * @package Sourcefit\Application\LeaveManagement
 */
interface FileLeave
{

    /**
     * Unique leave identifier.
     * @return string
     */
    public function leaveId(): string;

    /**
     * Employee identifier who filed the leave.
     * @return string
     */
    public function employeeId(): string;

    /**
     * Date and time when the leave was filed.
     * @return DateTimeInterface
     */
    public function leaveDate(): DateTimeInterface;
}