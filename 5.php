<?php
   // 建立與資料庫的連線
   // 主機：db4free.net，使用者：immust，密碼：immustimmust，資料庫名稱：immust
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 從 user 資料表中查詢所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");
   // 用 while 迴圈搭配 mysqli_fetch_array()，一筆一筆取出查詢結果
   while ($row = mysqli_fetch_array($result)) {
     // 輸出每一筆資料的 id 和 pwd 欄位，並換行
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   } 
?>