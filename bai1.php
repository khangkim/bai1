<?php
// Lấy đường dẫn thư mục hiện tại
$currentDirectory = getcwd();

// Đường dẫn tệp tin để ghi đường dẫn thư mục hiện tại vào
$filePath = 'current_directory.txt';

// Ghi đường dẫn thư mục hiện tại vào tệp tin
if (file_put_contents($filePath, $currentDirectory)) {
    echo "Đã ghi đường dẫn thư mục hiện tại vào tệp tin thành công.";
} else {
    echo "Đã xảy ra lỗi khi ghi đường dẫn thư mục hiện tại vào tệp tin.";
}
?>