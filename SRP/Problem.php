<?php
declare(strict_types = 1);

class Report
{
    public function title(): string
    {
        return 'Report Title';
    }

    public function date(): string
    {
        return '2016-04-21';
    }

    public function contents(): array
    {
        return [
            'title' => $this->title(),
            'date' => $this->date(),
        ];
    }

    /** @throws JsonException */
    public function formatJson()
    {
        return json_encode($this->contents(), JSON_THROW_ON_ERROR);
    }
}