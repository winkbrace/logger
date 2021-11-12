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
        ob_start();
        $this->log->info('Dit is een test');

        $output = ob_get_clean();

        $this->assertEquals('INFO: Dit is een test', $output);
    }

    public function test_it_should_log_error(): void
    {
        ob_start();
        $this->log->error('Dit is een test');

        $output = ob_get_clean();

        $this->assertEquals('ERROR: Dit is een test', $output);
    }
}
