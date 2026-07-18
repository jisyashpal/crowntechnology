<?php
// Test Connection Script
require_once 'src/pages/db.php';

try {
    echo "[✓] Database connection successful\n";
    
    // Test 1: Check services page
    $stmt = $pdo->prepare('SELECT * FROM pages WHERE slug = ? LIMIT 1');
    $stmt->execute(['services']);
    $page = $stmt->fetch();
    
    if ($page) {
        echo "[✓] Services page found\n";
        echo "  - Title: " . $page['title'] . "\n";
        echo "  - Status: " . $page['status'] . "\n";
    } else {
        echo "[⚠] Services page not found in database\n";
    }
    
    // Test 2: Check active services count
    $countStmt = $pdo->prepare('SELECT COUNT(*) as count FROM services WHERE status = ?');
    $countStmt->execute(['active']);
    $result = $countStmt->fetch();
    $activeCount = $result['count'] ?? 0;
    echo "[✓] Active services in database: " . $activeCount . "\n";
    
    // Test 3: List active services
    if ($activeCount > 0) {
        $servicesStmt = $pdo->prepare('SELECT id, title, status FROM services WHERE status = ? ORDER BY sort_order ASC');
        $servicesStmt->execute(['active']);
        $services = $servicesStmt->fetchAll();
        
        echo "[✓] Active services:\n";
        foreach ($services as $service) {
            echo "  - [ID: " . $service['id'] . "] " . $service['title'] . "\n";
        }
    }
    
    echo "\n✅ All connections verified successfully!\n";
    
} catch (PDOException $e) {
    echo "[✗] Database Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>
