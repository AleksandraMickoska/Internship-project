<?php
require_once 'header.php';
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
    <div class="container-fluid text-center p-3 m-3">
        <table id="news_table" class="border p-3 text-center">
           <thead class="text-center m-2 p-3">Recent news</thead>
            <tbody id="news_table_body">
            <tr>
                <td class="m-3">TITLE</td>
                <td class="m-3">CONTENT</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
require_once 'footer.php';
?>