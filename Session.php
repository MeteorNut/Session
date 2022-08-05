<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Srisakdi:wght@700&display=swap" rel="stylesheet">
    <title>: : การทำงานกับฟอร์ม : :</title>
<style type="text/css">
    body{
        font-family: 'Srisakdi';
    }
</style>
</head>
<body>
    <form naem="formal" action="#" method="post" enctype="multipart/form-data">
        <div class="container text-center">
            <div class="row row-cols-3">
                <div class="col"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
                    <select class="form-select" name="txt_firstname" id="txt_firstname">
                    <option selected>กรุณาเลือกคำนำหน้า</option>
                    <option value="1">นาย</option>
                    <option value="2">นาง</option>
                    <option value="3">นางสาว</option>
                    </select>
                </div>
                <div class="col"><label class="form-label">ชื่อ</label>
                <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ"></div>
                <div class="col"><label class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="txt_firstname" id="txt_firstname" placeholder="กรุณากรอกนามสกุล"></div>
            </div>
        </div>
    </form>
</body>
</html>