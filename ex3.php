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

    <form action="ex4.php" method="GET">
        ชื่อ : <input type="text" name="n">
        นามสกุล : <input type="text" name="s"> <br>
        <input type="submit" value="SEND">
    </form>
</body>
</html>