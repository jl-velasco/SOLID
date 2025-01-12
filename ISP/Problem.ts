interface Printer {
    printDocument(document: string): void;
    scanDocument(document: string): void;
    sendFax(document: string, faxNumber: string): void;
}

class BasicPrinter implements Printer {
    public printDocument(document: string): void {
        console.log(`Imprimiendo documento: ${document}`);
    }

    public scanDocument(document: string): void {
        throw new Error("Este dispositivo no puede escanear.");
    }

    public sendFax(document: string, faxNumber: string): void {
        throw new Error("Este dispositivo no puede enviar fax.");
    }
}

class AllInOnePrinter implements Printer {
    public printDocument(document: string): void {
        console.log(`Imprimiendo documento: ${document}`);
    }

    public scanDocument(document: string): void {
        console.log(`Escaneando documento: ${document}`);
    }

    public sendFax(document: string, faxNumber: string): void {
        console.log(`Enviando fax del documento ${document} al número ${faxNumber}`);
    }
}

function processPrinter(printer: Printer, document: string): void {
    try {
        printer.printDocument(document);
        printer.scanDocument(document);
        printer.sendFax(document, "123456");
    } catch (error) {
        if (error instanceof Error) {
            console.error(error.message);
        }
    }
}

const basicPrinter = new BasicPrinter();
processPrinter(basicPrinter, "Mi Documento");

const allInOnePrinter = new AllInOnePrinter();
processPrinter(allInOnePrinter, "Mi Documento");