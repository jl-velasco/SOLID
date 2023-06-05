<?php
declare(strict_types=1);

interface Workable
{
    public function canCode(): bool;

    public function code(): string;

    public function test(): string;
}

class Programmer implements Workable
{
    public function canCode(): bool
    {
        return true;
    }

    public function code(): string
    {
        return 'coding';
    }

    public function test(): string
    {
        return 'testing in localhost';
    }
}

class Tester implements Workable
{
    public function canCode(): bool
    {
        return false;
    }

    public function code(): string
    {
        throw new Exception('Opps! I can not code');
    }

    public function test(): string
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member): string
    {
        if ($member->canCode()) {
            return $member->code();
        }
    }
}
