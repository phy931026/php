<?php
   // 建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 從 user 資料表中查詢所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");
   // 初始化登入狀態為 false
   $login = FALSE;
   // 逐筆比對帳號密碼
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   }
   // 如果登入成功
   if ($login == TRUE) {
       session_start();                     // 啟動 session
       $_SESSION["id"] = $_POST["id"];      // 把帳號存入 session
       echo "登入成功";
       echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  // 3 秒後跳轉
   } else {
       echo "帳號/密碼 錯誤";
       echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
   }
?>