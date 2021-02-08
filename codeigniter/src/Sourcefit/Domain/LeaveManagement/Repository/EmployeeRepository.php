<?php

namespace Sourcefit\Domain\LeaveManagement\Repository;

use Sourcefit\Domain\LeaveManagement\Employee;

/**
 * Interface EmployeeRepository
 * @package Sourcefit\Repository
 */
interface EmployeeRepository
{

    /**
     * @param string $employeeId
     * @return Employee|null
     */
    public function findOne(string $employeeId): ?Employee;

    /**
     * @param Employee $employee
     */
    public function store(Employee $employee): void;
}