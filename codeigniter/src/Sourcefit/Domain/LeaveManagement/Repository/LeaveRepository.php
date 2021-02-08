<?php


namespace Sourcefit\Domain\LeaveManagement\Repository;


use Sourcefit\Domain\LeaveManagement\Leave;

/**
 * Interface LeaveRepository
 * @package Sourcefit\Domain\LeaveManagement\Repository
 */
interface LeaveRepository
{

    /**
     * @param string $leaveId
     * @return Leave|null
     */
    public function findOne(string $leaveId): ?Leave;

    /*
     *
     */
    public function store(Leave $leave): void;
}