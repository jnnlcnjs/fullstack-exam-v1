<?php


namespace Sourcefit\Application\LeaveManagement\Handler;

use Sourcefit\Application\LeaveManagement\FileLeave;
use Sourcefit\Domain\LeaveManagement\Repository\EmployeeRepository;
use Sourcefit\Domain\LeaveManagement\Repository\LeaveRepository;

/**
 * Interface LeaveFilingHandler
 * @package Sourcefit\Application\LeaveManagement\Handler
 */
interface LeaveFilingHandler
{

    /**
     * LeaveApprovalHandler constructor.
     * @param LeaveRepository $leaveRepository
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(LeaveRepository $leaveRepository, EmployeeRepository $employeeRepository);


    /**
     * @param FileLeave $command
     */
    public function handleThis(FileLeave $command): void;

}