<?php

class MenuManager {
    protected $database; 
    
    public function __construct($database) {
        $this->database = $database;
    }
    
    public function getMenuItems() {
        $query = "SELECT * FROM menu_items";
        $result = $this->database->query($query);
        
        $menuItems = [];
        while ($row = $result->fetch_assoc()) {
            $menuItem = new MenuItem($row['id'], $row['name'], $row['parent_id']);
            $menuItems[] = $menuItem;
        }
        
        return $menuItems;
    }
    
    public function insertMenuItem($name, $parentId = null) {
        $query = "INSERT INTO menu_items (name, parent_id) VALUES ('$name', '$parentId')";
        $this->database->query($query);
        
        return new MenuItem($name, $parentId);
    }
    
    public function updateMenuItem($id, $name, $parentId = null) {
        $query = "UPDATE menu_items SET name='$name', parent_id='$parentId' WHERE id='$id'";
        $this->database->query($query);
    }
    
    public function deleteMenuItem($id) {
        $query = "DELETE FROM menu_items WHERE id='$id'";
        $this->database->query($query);
    }
}