<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #3498db;
            font-size: 3em;
        }
        p {
            font-size: 1.2em;
            color: #555555;
        }
        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng đến với trang PHP của tôi!</h1>
        <p>Đây là trang chủ của ứng dụng PHP chạy trên Docker.</p>
        <a href="#" class="btn">Tìm hiểu thêm</a>
    </div>
</body>
</html>';
?>
