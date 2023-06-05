<?php
declare(strict_types = 1);

class Programmer
{
    public function code(): string
    {
        return 'coding';
    }
}

class Tester
{
    public function test(): string
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process(mixed $member): string
    {
        if ($member instanceof Programmer) {
            return $member->code();
        }

        if ($member instanceof Tester) {
            return $member->test();
        }

        throw new \RuntimeException('Invalid input member');
    }
}
