<?php

interface Printer
{
    public function printDocument($document);
    public function scanDocument($document);
    public function sendFax($document, $faxNumber);
}

class BasicPrinter implements Printer
{
    public function printDocument($document)
    {
        echo "Imprimiendo documento: $document\n";
    }

    public function scanDocument($document)
    {
        throw new Exception("Este dispositivo no puede escanear.");
    }

    public function sendFax($document, $faxNumber)
    {
        throw new Exception("Este dispositivo no puede enviar fax.");
    }
}

class AllInOnePrinter implements Printer
{
    public function printDocument($document)
    {
        echo "Imprimiendo documento: $document\n";
    }

    public function scanDocument($document)
    {
        echo "Escaneando documento: $document\n";
    }

    public function sendFax($document, $faxNumber)
    {
        echo "Enviando fax del documento $document al número $faxNumber\n";
    }
}

// Uso
function processPrinter(Printer $printer, $document)
{
    $printer->printDocument($document);
    $printer->scanDocument($document);
    $printer->sendFax($document, "123456");
}

// Prueba
$basicPrinter = new BasicPrinter();
processPrinter($basicPrinter, "Mi Documento"); // Error: Métodos no soportados generan excepciones