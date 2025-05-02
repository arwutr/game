<?php
$filename = "othello.csv";

if (file_exists($filename)) {
  $lines = array_reverse(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
  echo "<ul>";
  foreach (array_slice($lines, 0, 10) as $line) {
    [$date, $p1, $p2, $winner] = explode(",", $line);
    echo "<li>🕒 $date — <strong>$p1</strong> vs <strong>$p2</strong> 👉 ผู้ชนะ: <strong>$winner</strong></li>";
  }
  echo "</ul>";
} else {
  echo "ยังไม่มีข้อมูลการแข่งขันย้อนหลังค่ะ";
}
?>
