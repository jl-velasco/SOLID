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
}

interface ReportFormattable
{
    public function format(Report $report);
}

class JsonReportFormatter implements ReportFormattable
{
    /** @throws JsonException */
    public function format(Report $report): string
    {
        return json_encode($report->contents(), JSON_THROW_ON_ERROR);
    }
}

echo (new JsonReportFormatter())->format(new Report());