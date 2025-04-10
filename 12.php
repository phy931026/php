<?php
    // 啟動 session 機制
    session_start();
    // 清除 Session 中的 id 變數，即登出
    unset($_SESSION["id"]);
    // 顯示登出成功訊息
    echo "登出成功....";
    // 3 秒後自動跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>