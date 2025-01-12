class Report {
    public generate(): string {
        return "Datos del informe";
    }

    public saveToFile(filename: string): void {
        const data = this.generate();
        const fs = require('fs');
        fs.writeFileSync(filename, data, { encoding: 'utf8' });
    }

    public printReport(): void {
        console.log(this.generate());
    }
}


const report = new Report();
report.saveToFile('reporte.txt');
report.printReport();