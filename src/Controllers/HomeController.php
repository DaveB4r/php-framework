<?php

namespace App\Controllers;

use App\Config\Database;
use App\Controller;
use App\Models\Journal;
use PDO;

class HomeController extends Controller
{
  private $db, $journal;

  public function __construct()
  {
    $database = new Database();
    $this->db = $database->getConnection();
    $this->journal = new Journal($this->db);
  }

  public function index()
  {
    $journals = $this->journal->selectAll();
    $this->render('index', ['journals' => $journals]);
  }
}
