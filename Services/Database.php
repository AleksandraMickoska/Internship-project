<?php
require_once __DIR__ . '../../Interfaces/iDatabase.php';
require_once __DIR__ . '../../Shared/consts.php';

class Database implements iDatabase
{
     // Members
     private $pdo;

     //queris
     
     private $_getNews = "SELECT * FROM `news` WHERE 1";

    private $_GetNewsByTitleCategoryDate = "SELECT * FROM `news` WHERE title=:title , category=:category AND created_at=:created_at";

     private $_getPagesFromMenu = "SELECT * FROM `menu` WHERE 1";
     
     
     private $_getCountries = "SELECT Country From countries";
};




?>