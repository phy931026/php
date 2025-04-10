<?php
    // 啟動 Session 機制，一定要在最上面
    session_start();
    // 檢查 session 裡有沒有 counter 這個變數
    if (!isset($_SESSION["counter"]))
        // 沒有的話就設為 1（第一次進來）
        $_SESSION["counter"] = 1;
    else
        // 如果已經有了，就 +1（表示重新整理了）
        $_SESSION["counter"]++;
    // 顯示目前的計數值
    echo "counter=" . $_SESSION["counter"];
    // 提供一個連結可以重置計數器（會連到另一個 PHP 檔案）
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
