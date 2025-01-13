class Order {
    private items: { item: string, price: number }[] = [];
    private total: number = 0;

    addItem(item: string, price: number): void {
        this.items.push({ item, price });
        this.total += price;
    }

    getTotal(): number {
        return this.total;
    }

    saveToDatabase(): void {
        // Simulación de guardar en la base de datos
        console.log("Guardando el pedido en la base de datos...");
    }

    generateInvoice(): void {
        console.log("Generando factura del pedido...");
        this.items.forEach(item => {
            console.log(`Producto: ${item.item}, Precio: ${item.price}`);
        });
        console.log(`Total: ${this.total}`);
    }
}

const order = new Order();
order.addItem("Laptop", 1000);
order.addItem("Mouse", 50);
order.saveToDatabase();
order.generateInvoice();