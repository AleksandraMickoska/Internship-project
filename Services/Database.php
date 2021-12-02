<?php
     require_once __DIR__ . '../../Interfaces/iDatabase.php';
     require_once __DIR__ . '../../Shared/consts.php';

     class Database implements iDatabase
     {
          // Members
          private $pdo;

          //queries
          
          private $_getNewsTitle = "SELECT 'title' FROM `news` ";

          private $_GetNewsByTitleCategoryDate = "SELECT * FROM `news` WHERE title=:title , category=:category AND created_at=:created_at";

          private $_getPagesFromMenu = "SELECT * FROM `menu` ";
          
          private $_getCategories = "SELECT 'category_name' FROM 'categories'";
          
          private $_getCountries = "SELECT Country From countries";


          // Constructor
          function __construct()
          {
               try 
               {
               $this->pdo = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);
               }
               catch (PDOException $e)  
               {
               header("Location: index.php");
               die();
               };         
          }

          // Methods
          function GetNewsTitle()
          { 
               $pdo = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);
               $stmt = $pdo->prepare($this->_getNewsTitle);
               $stmt -> execute([]);
               return $stmt->fetchAll();
          }

          function GetCategories()
          {
               $pdo = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);
               $stmt = $pdo->prepare($this->_getCategories);
               $stmt -> execute([]);
               return $stmt->fetchAll();
          }
     }
?>