<?php
// ตรวจสอบว่าเป็น POST request และมีข้อมูลที่จำเป็น
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $player1 = $_POST["player1"] ?? "Player 1";
    $player2 = $_POST["player2"] ?? "Player 2";
    $winner  = $_POST["winner"]  ?? "ไม่ทราบ";

    $date = date("Y-m-d H:i:s");
    $file = fopen("othello.csv", "a");

    if ($file) {
        fputcsv($file, [$date, $player1, $player2, $winner]);
        fclose($file);
        echo "บันทึกผลการแข่งขันเรียบร้อยแล้วค่ะ ♥︎";
    } else {
        echo "ไม่สามารถเปิดไฟล์เพื่อเขียนข้อมูลได้ค่ะ";
    }
} else {
    echo "กรุณาส่งข้อมูลผ่านแบบฟอร์มค่ะ";
}
?>
