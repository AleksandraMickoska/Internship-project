<?php
interface IDatabase 
{
    //get functions

    // will get latest inserted data with data for specified category(categoryId)
    public function GetLastInsertedDataForCategory($categoryId);

    // will return all news in your database
    public function GetNews();

    // will return all pages from MENU in your database
    public function GetPagesFromMenu();

    // will return all pages from SUBMENU in your database
    public function GetPagesFromSubmenu();

    // return all data for news in specified title, category and date created
    public function GetNewsByTitleCategoryDate($title,$category,$created_at);

    
    //insert functions

    // will insert one country by call (if is not inserted) 
    public function InsertMessage($message);  
   
}
?>