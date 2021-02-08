<?php


namespace Sourcefit\Domain\LeaveManagement;


use DateTimeInterface;

/**
 * Interface Leave
 * @package Sourcefit\Domain\LeaveManagement
 */
interface Leave
{

    /**
     * @param string $leaveId
     * @param string $employeeId
     * @param DateTimeInterface $leaveDate
     */
    public function file(string $leaveId, string $employeeId, DateTimeInterface $leaveDate): void;

    /**
     * @param string $leaveId
     * @param string $deniedBy
     * @param DateTimeInterface $deniedOn
     */
    public function deny(string $leaveId, string $deniedBy, DateTimeInterface $deniedOn): void;

    /**
     * @param string $leaveId
     * @param string $approvedBy
     * @param DateTimeInterface $approvedOn
     */
    public function approve(string $leaveId, string $approvedBy, DateTimeInterface $approvedOn): void;

    /**
     * @param string $leaveId
     * @param string $cancelledBy
     * @param DateTimeInterface $cancelledOn
     */
    public function cancel(string $leaveId, string $cancelledBy, DateTimeInterface $cancelledOn): void;

}