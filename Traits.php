<?php
// Traits in PHP are mechanisms for code reuse that allow developers to include methods and properties into multiple classes without using inheritance.


// Differences from Classes and Interfaces:
        // Classes: Traits cannot be instantiated and are not meant to stand alone. They are purely for code reuse.
        // Interfaces: Traits can contain method implementations and properties, whereas interfaces cannot.

trait PDFGeneratorTrait {
    public function generatePDF($content) {
        // Simplified PDF generation logic
        echo "Generating PDF with content: {$content}\n";
    }
}

// Class Report using PDFGeneratorTrait
class Report {
    use PDFGeneratorTrait;

    public function createReport($data) {
        $content = "Report Data: " . json_encode($data);
        $this->generatePDF($content);
    }
}

// Class Invoice using PDFGeneratorTrait
class Invoice {
    use PDFGeneratorTrait;

    public function createInvoice($amount) {
        $content = "Invoice Amount: $" . number_format($amount, 2);
        $this->generatePDF($content);
    }
}

// Class Receipt using PDFGeneratorTrait
class Receipt {
    use PDFGeneratorTrait;

    public function createReceipt($item) {
        $content = "Receipt Item: " . $item;
        $this->generatePDF($content);
    }
}

// Usage
$report   = new Report();
$invoice  = new Invoice();
$receipt  = new Receipt();

$report->createReport(['sales' => 1500, 'expenses' => 500]);
echo "<br><br>";
$invoice->createInvoice(299.99);
echo "<br><br>";
$receipt->createReceipt("Laptop");
?>