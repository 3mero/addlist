<?php
// قم بقراءة الرابط المُدخل
$link = $_POST['link'];

// افتح الملف المناسب للكتابة (استخدم قيمة الـ name للتحقق)
if(isset($_POST['link1'])) {
    $file = fopen("1.txt", "a");
} elseif(isset($_POST['link2'])) {
    $file = fopen("2.txt", "a");
}

// اكتب الرابط المُدخل في الملف
fwrite($file, "0.0.0.0 " . $link . "\n");
// أغلق الملف
fclose($file);
?>
