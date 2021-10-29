<?php declare(strict_types=1);

namespace BitAcademy\Logger;

/**
 * This class is responsible for loggin text to the cli
 */
final class Log
{
    public function info(string $message): string
    {
        return 'INFO: ' . $message;
    }
}
