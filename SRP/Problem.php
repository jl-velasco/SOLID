<?php

class Order
{
    private $items = [];
    private $total = 0;

    public function addItem($item, $price)
    {
        $this->items[] = ['item' => $item, 'price' => $price];
        $this->total += $price;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function saveToDatabase()
    {
        // Simulación de guardar en la base de datos
        echo "Guardando el pedido en la base de datos...\n";
    }

    public function generateInvoice()
    {
        echo "Generando factura del pedido...\n";
        foreach ($this->items as $item) {
            echo "Producto: {$item['item']}, Precio: {$item['price']}\n";
        }
        echo "Total: {$this->total}\n";
    }
}

$order = new Order();
$order->addItem("Laptop", 1000);
$order->addItem("Mouse", 50);
$order->saveToDatabase();
$order->generateInvoice();