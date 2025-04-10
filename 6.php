<?php
   // 建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 查詢 user 資料表中的所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");
   // 初始化登入旗標為 FALSE
   $login = FALSE;
   // 用 while 迴圈一筆一筆抓資料，並檢查帳號與密碼是否相符
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   }
   // 根據 login 旗標輸出結果
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>