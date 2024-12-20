<?php

namespace Ch1nesy\MyCore;

interface LoggerServiceInterface
{
    public function errors(string $message, array $errors);

    public function info(string $message, array $warnings);

    public function warnings(string $message, array $warnings);

}