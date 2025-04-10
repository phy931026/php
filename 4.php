<?php
    // 使用 mysqli_connect() 建立與資料庫的連線
    // 參數分別是：主機位置、使用者名稱、密碼、資料庫名稱
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 使用 mysqli_query() 發送 SQL 查詢指令，這裡是查詢 user 資料表的所有資料
    $result = mysqli_query($conn, "SELECT * FROM user");
    // 使用 mysqli_fetch_array() 從查詢結果中取出一筆資料（第一筆）
    $row = mysqli_fetch_array($result);
    // 輸出這筆資料的 id 和 pwd 欄位
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 
    // 再取出第二筆資料
    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>