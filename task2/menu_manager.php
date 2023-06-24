<?php
class MenuManager {
    protected $database; 
    
    public function __construct($database) {
        $this->database = $database;
    }
    
    public function getMenuItems() {
        try {
            $query = "SELECT * FROM menu_items";
            $result = $this->database->query($query);
            
            $menuItems = [];
            while ($row = $result->fetch_assoc()) {
                $menuItem = new MenuItem($row['id'], $row['name'], $row['parent_id']);
                $menuItems[] = $menuItem;
            }
            
            return $menuItems;
        } catch (Exception $e) {
            throw new Exception("Failed to fetch menu items: " . $e->getMessage());
        }
    }

    private function checkIdExists($id) {
        $query = "SELECT COUNT(*) AS count FROM menu_items WHERE id='$id'";
        $result = $this->database->query($query);
        $row = $result->fetch_assoc();
        $itemCount = $row['count'];

        return $itemCount > 0;
    }
    
    public function insertMenuItem($name, $parentId = null) {
        try {
            if ($parentId !== null) {
                if (!is_int($parentId)) {
                    throw new Exception("Parent ID must be an integer.");
                }

                if (!$this->checkIdExists($parentId)) {
                    throw new Exception("Parent item with ID '$parentId' does not exist.");
                }
            }

            $query = "INSERT INTO menu_items (name, parent_id) VALUES ('$name', '$parentId')";
            $this->database->query($query);
            
            return new MenuItem($name, $parentId);
        } catch (Exception $e) {
            throw new Exception("Failed to insert menu item: " . $e->getMessage());
        }
    }
    
    public function updateMenuItem($id, $name, $parentId = null) {
        try {
            if (!is_int($id)) {
                throw new Exception("ID must be an integer.");
            }

            if (!$this->checkIdExists($id)) {
                throw new Exception("Menu item with ID '$id' does not exist.");
            }

            if ($parentId !== null) {
                if (!is_int($parentId)) {
                    throw new Exception("Parent ID must be an integer.");
                }

                if (!$this->checkIdExists($parentId)) {
                    throw new Exception("Parent item with ID '$parentId' does not exist.");
                }
            }

            $query = "UPDATE menu_items SET name='$name', parent_id='$parentId' WHERE id='$id'";
            $this->database->query($query);
        } catch (Exception $e) {
            throw new Exception("Failed to update menu item: " . $e->getMessage());
        }
    }
    
    public function deleteMenuItem($id) {
        try {
            if (!is_int($id)) {
                throw new Exception("ID must be an integer.");
            }

            if (!$this->checkIdExists($id)) {
                throw new Exception("Menu item with ID '$id' does not exist.");
            }
            
            $query = "DELETE FROM menu_items WHERE id='$id'";
            $this->database->query($query);
        } catch (Exception $e) {
            throw new Exception("Failed to delete menu item: " . $e->getMessage());
        }
    }
}
