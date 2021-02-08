<?php


namespace Sourcefit\Application\LeaveManagement\Handler;

use Sourcefit\Application\LeaveManagement\DenyLeave;
use Sourcefit\Domain\LeaveManagement\Repository\EmployeeRepository;
use Sourcefit\Domain\LeaveManagement\Repository\LeaveRepository;

/**
 * Interface LeaveDenialHandler
 * @package Sourcefit\Application\LeaveManagement\Handler
 */
interface LeaveDenialHandler
{

    /**
     * LeaveApprovalHandler constructor.
     * @param LeaveRepository $leaveRepository
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(LeaveRepository $leaveRepository, EmployeeRepository $employeeRepository);

    /**
     * @param DenyLeave $command
     */
    public function handleThis(DenyLeave $command): void;

}