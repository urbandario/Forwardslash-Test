<?php
require_once 'menu_item.php';
require_once 'menu_manager.php';
require_once 'database.php';

$host = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'forwardslash';

try {
    $database = new Database($host, $username, $password, $databaseName);

    $menuManager = new MenuManager($database);

    // Insert a new menu item
    // $newMenuItem = $menuManager->insertMenuItem('New Item1', 5);

    // Update an existing menu item
    // $menuManager->updateMenuItem(5, 'Updated Item', 6);

    // Delete a menu item
    $menuManager->deleteMenuItem(4);

    $menuItems = $menuManager->getMenuItems();
    foreach ($menuItems as $menuItem) {
        echo "ID: " . $menuItem->getId() . ", Name: " . $menuItem->getName() . ", Parent ID: " . $menuItem->getParentId() . "\n";
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
