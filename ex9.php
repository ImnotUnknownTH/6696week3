<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>example 1</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Noto Sans Thai", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings:
            "wdth" 100;
        }
    </style>
</head>
<body>
    <h1>โปรแกรม ภาษา PHP สร้างฟอร์มรับข้อมูล</h1>
    664485021 นายปัญญาวัฒน์ ภุมมะดิลก <br>
    หมู่เรียน66/96 
    <h2>โปรแกรมพื้นที่สี่เหลี่ยมผืนผ้า</h2>
    <form action="ex10.php" method="POST">
        กว้าง : <input type="text" name="w"> เมตร
        ยาว : <input type="text" name="l"> เมตร
        สูง : <input type="text" name="h"> เซนติเมตร<br>
        <input type="submit" value="CALC">
    </form>
</body>
</html>