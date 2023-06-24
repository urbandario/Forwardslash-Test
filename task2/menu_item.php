<?php

class MenuItem {
    protected $id;
    protected $name;
    protected $parentId;
    
    public function __construct($id, $name, $parentId = null) {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getParentId() {
        return $this->parentId;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setParentId($parentId) {
        $this->parentId = $parentId;
    }
}