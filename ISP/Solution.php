<?php
declare(strict_types=1);

interface Codeable
{
    public function code(): string;
}

interface Testable
{
    public function test(): string;
}

class Programmer implements Codeable, Testable
{
    public function code(): string
    {
        return 'coding';
    }

    public function test(): string
    {
        return 'testing in localhost';
    }
}

class Tester implements Testable
{
    public function test(): string
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Codeable $member): string
    {
        return $member->code();
    }
}
