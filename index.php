<?php
require_once './MenuPagesLayouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" class="">
        <h4>Пронајди статија</h4>
        <div class="dropdown pt-3 d-flex">
            <select name="news_title" class = "text-dark bg-white fw-bold" style="width: 30%;">
                <option class = "text-dark bg-white fw-bold" value="x" >Одбери наслов на статија</option>
              
            </select>
        </div>  

        <div class="row">
            <?php
                require_once './Services/Database.php';
                GetNews();
            ?>

        </div> 




        <!-- <div class="dropdown pt-3 d-flex">
            <select name="category" class = "text-dark bg-white fw-bold" style="width: 30%;">
                <option class = "text-dark bg-white fw-bold" value="y" >Одбери категорија</option>
                
            </select>
        </div>   
        <div class="dropdown pt-3 d-flex">
            <select name="date" class = "text-dark bg-white fw-bold" style="width: 30%;">
                <option class = "text-dark bg-white fw-bold" value="z" >Одбери датум на објава</option>
                
            </select>
        </div>   -->          
    </form>
    
</body>
</html>




<?php
require_once './MenuPagesLayouts/footer.php';
?>
