<?php
    // 關閉錯誤訊息顯示（不建議在開發階段使用，正式上線時才這樣做）
    error_reporting(0);
    // 建立與資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 查詢 bulletin 資料表的所有資料
    $result = mysqli_query($conn, "SELECT * FROM bulletin");
    // 輸出 HTML 表格的表頭
    echo "<table border=2>
            <tr>
              <td>佈告編號</td>
              <td>佈告類別</td>
              <td>標題</td>
              <td>佈告內容</td>
              <td>發佈時間</td>
            </tr>";
    // 逐筆輸出資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>" . $row["bid"] . "</td>
                <td>" . $row["type"] . "</td>
                <td>" . $row["title"] . "</td>
                <td>" . $row["content"] . "</td>
                <td>" . $row["time"] . "</td>
              </tr>";
    }
    echo "</table>";
?>