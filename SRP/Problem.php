<?php
declare(strict_types = 1);

class Report
{
    public function generate()
    {
        return "Datos del informe";
    }

    public function saveToFile($filename)
    {
        $data = $this->generate();
        file_put_contents($filename, $data);
    }

    public function printReport()
    {
        echo $this->generate();
    }
}

$report = new Report();
$report->saveToFile('reporte.txt');
$report->printReport();