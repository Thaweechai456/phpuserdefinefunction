<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Defined Function</title>
</head>
<body>
    <h1>ทดสอบการสร้าง Function ที่สร้างโดยผู้พัฒนาโปรแกรม</h1>
    <?php
    $name = "นายทวีชัย นามฮาด";
    Hello($name);

    function Hello($yourname){
        echo "<h3>ผู้พัฒนาโปรแกรม</h3>";
        echo "<h3>.$yourname.</h3>";
        echo "<hr>";
    }
    function sum($x,$y) {
        $z = $x+$y;
        return
    }
    function bye(){
        echo "<hr>";
        echo "<h4>หลักสูตรวิทยาศาตร์บัณฑิต เทคโนโลยีสารสนเทศ</h4>";
        echo "<h4>คณะวิทยาศาตร์ มหาวิทยาลัยราชภัฏอุดรธานี</h4>";
    }
    ?>
</body>
</html>