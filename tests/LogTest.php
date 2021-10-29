<?php

declare(strict_types=1);

use BitAcademy\Logger\Log;
use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{
    private Log $log;

    protected function setUp(): void
    {
        parent::setUp();

        $this->log = new Log();
    }

    public function test_it_should_log_info(): void
    {
        $output = $this->log->info('Dit is een test');

        $this->assertEquals('INFO: Dit is een test', $output);
    }
}
