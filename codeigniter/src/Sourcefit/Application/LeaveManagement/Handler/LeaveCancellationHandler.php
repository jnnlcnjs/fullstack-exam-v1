<?php


namespace Sourcefit\Application\LeaveManagement\Handler;

use Sourcefit\Application\LeaveManagement\CancelLeave;
use Sourcefit\Domain\LeaveManagement\Repository\EmployeeRepository;
use Sourcefit\Domain\LeaveManagement\Repository\LeaveRepository;

/**
 * Interface CancelLeaveHandler
 * @package Sourcefit\Application\LeaveManagement\Handler
 */
interface LeaveCancellationHandler
{

    /**
     * LeaveApprovalHandler constructor.
     * @param LeaveRepository $leaveRepository
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(LeaveRepository $leaveRepository, EmployeeRepository $employeeRepository);

    /**
     * @param CancelLeave $command
     */
    public function handleThis(CancelLeave $command): void;
}