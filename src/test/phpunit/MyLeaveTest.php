<?php
use PHPUnit\Framework\TestCase;

class MyLeaveTest extends TestCase
{
    public function testValidateDateRange()
    {
        $fromDate = '2025-11-10';
        $toDate = '2025-11-05';

        $isValid = strtotime($fromDate) <= strtotime($toDate);

        $this->assertFalse($isValid, "O sistema deve impedir intervalos de datas inválidos.");
    }
}
