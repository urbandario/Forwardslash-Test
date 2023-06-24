<?php
require_once 'menu_item.php';
require_once 'menu_manager.php';
require_once 'database.php';

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'forwardslash';

$database = new Database($host, $username, $password, $database);

$menuManager = new MenuManager($database);

// Insert a new menu item
// $newMenuItem = $menuManager->insertMenuItem('New Item', 2);

// Update an existing menu item
// $menuManager->updateMenuItem(3, 'Updated Item', 1);

// Delete a menu item
// $menuManager->deleteMenuItem(4);

$menuItems = $menuManager->getMenuItems();
foreach ($menuItems as $menuItem) {
    echo "ID: " . $menuItem->getId() . ", Name: " . $menuItem->getName() . ", Parent ID: " . $menuItem->getParentId() . "\n";
}
