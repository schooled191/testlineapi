<?php
$arr  = Array(
               'type' => 'text',
				       'text' => 'ระบบกำลังแปลงภาพเป็นข้อความ ผลลัพธ์ที่ได้จะถูกส่งกลับทาง LINE ในอีก 2-3 นาทีหลังจากนี้ กรุณารอสักครู่...'
               );
 
echo json_encode($arr);
sleep(10);
echo "END";
