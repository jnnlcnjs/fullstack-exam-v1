<?php


namespace Sourcefit\Domain\LeaveManagement;

/**
 * Interface Employee
 * @package Sourcefit
 */
interface Employee
{

    /**
     * @return string
     */
    public function id(): string;

    /**
     * @return string
     */
    public function firstName(): string;

    /**
     * @return string
     */
    public function lastName(): string;

    /**
     * @return string
     */
    public function status(): string;

}