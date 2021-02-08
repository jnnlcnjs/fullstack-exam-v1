<?php


namespace Sourcefit\Application\LeaveManagement\Handler;


use Sourcefit\Application\LeaveManagement\ApproveLeave;
use Sourcefit\Domain\LeaveManagement\Repository\EmployeeRepository;
use Sourcefit\Domain\LeaveManagement\Repository\LeaveRepository;

/**
 * Interface LeaveApprovalHandler
 * @package Sourcefit\Application\LeaveManagement\Handler
 */
interface LeaveApprovalHandler
{

    /**
     * LeaveApprovalHandler constructor.
     * @param LeaveRepository $leaveRepository
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(LeaveRepository $leaveRepository, EmployeeRepository $employeeRepository);

    /**
     * @param ApproveLeave $command
     */
    public function handleThis(ApproveLeave $command): void;
}