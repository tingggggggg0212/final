<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>112570016王婷蓁</title>
  </head>
  <body>
    <h1 class="text-center">112570016王婷蓁，期末考</h1>
    <div class="container">
        <div class="row">
            <a href="index.html" class="btn btn-warning col-2 offset-2">首頁</a>
            <a href="a1.html" class="btn btn-warning col-2 offset-1">第1題</a>
            <a href="a2.html" class="btn btn-warning col-2 offset-1">第2題</a>
        
        </div>
        <div class="row">    
            <a href="a3.html" class="btn btn-primary col-2 offset-1">第3題</a>
            <a href="a4.html" class="btn btn-primary col-2 offset-1">第4題</a>
            <a href="a5.html" class="btn btn-primary col-2 offset-1">第5題</a>
            <a href="a6.html" class="btn btn-primary col-2 offset-1">第6題</a>
        </div>
    </div>
    <hr>
    <h1 class="text-center">關鍵字查詢2022年股票名稱</h1>
    <div class="container">
      <form method="post" action="p4.php">
      <input name="t1" type="text" class="col-4 offset-2">
      <button class="col-3 btn btn-danger" type="submit">查詢</button>
      <p>
      <h3 class="text-center">
      代碼，名稱，每股營收，每股營業利益，每股營業利益，每股盈餘，純益率，類股
      <?php    
    $str = $_POST["t1"];

    //讀取資料表，4個步驟：

    //1.連線資料庫
    $conn = new mysqli("ccw-mysql.mysql.database.azure.com","user1","123@Ntut","firstdb");
    $conn->set_charset('utf8');

    //2.查詢資料表
    $result = $conn->query("select * from stock2022  where 名稱 like '%".$str."%'");

    
    //3.輸出全部資料
    $rowall = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rowall as $item)
    {
        echo "<br>".$item["代碼"].'，'.$item["名稱"].'，'.$item["每股營收"].'，'.$item["每股營業利益"].'，'.$item["每股營業利益"].'，'.$item["每股盈餘"].'，'.$item["純益率"].'，'.$item["類股"];
    }        

    
    //4.關閉連線：close connect
    $conn->close();


?>
</h3></p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
