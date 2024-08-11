<?php

namespace App\Models;

class Journal
{
  private $conn, $table_name = 'journals';
  public $name, $publishedYear;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function selectAll()
  {
    $query = "SELECT * FROM {$this->table_name}";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}
