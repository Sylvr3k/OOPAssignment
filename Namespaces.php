<?php
// Namespaces in PHP provide a way to encapsulate items such as classes, interfaces, functions, and constants.

// Importance:
   // Avoids naming collisions between different parts of a program or between different libraries.
   // Enhances code organization and readability.
   // Facilitates better management of large codebases.

namespace Payment;

class Manager {
    public function processPayment($amount) {
        echo "[Payment] Processing payment of \${$amount}.\n";
        echo "<br><br>";
    }
}

// File: src/Shipping/Manager.php
namespace Shipping;

class Manager {
    public function arrangeShipment($orderId) {
        echo "[Shipping] Arranging shipment for Order ID: {$orderId}.\n";
        echo "<br><br>";
    }
}

// File: src/Inventory/Manager.php
namespace Inventory;

class Manager {
    public function updateStock($productId, $quantity) {
        echo "[Inventory] Updating stock for Product ID: {$productId} with Quantity: {$quantity}.\n";
        echo "<br><br>";
    }
}

// File: index.php
// Autoload or include the class files
// For simplicity, assuming classes are already loaded

use Payment\Manager as PaymentManager;
use Shipping\Manager as ShippingManager;
use Inventory\Manager as InventoryManager;

// Instantiate the Payment Manager
$paymentManager = new PaymentManager();
$paymentManager->processPayment(250.00);

// Instantiate the Shipping Manager
$shippingManager = new ShippingManager();
$shippingManager->arrangeShipment(12345);

// Instantiate the Inventory Manager
$inventoryManager = new InventoryManager();
$inventoryManager->updateStock("SKU123", 50);
?>
