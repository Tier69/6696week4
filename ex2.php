<!DOCTYPE html>
<html lang="en">
<head>



 <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
<!-- เพิ่ม sweetaleart  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <style>
    body {
  font-family: "Itim", serif;
  font-weight: 400;
  font-style: normal;
  margin-left: 100px;
}

  </style>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง ภาษา PHP และ Bootstap</title>
</head>
<body>
<h1>การเขียนโปรแกรมด้วย PHP</h1> <br>
    664485028 นภัสกร กิตติเรืองชัย <br>
    หมู่เรียน 66/96 <br>

    <div class="alert alert-info">
  <strong>สำเร็จแล้ว</strong> Indicates a successful or positive action.
</div>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    </script>


<button type="button" class="btn btn-success">กดหนูสิ</button>
<button type="button" class="btn btn-danger">ยกเลิกบันทึก</button>
<br><br>

<div class="card bg-secondary text-white">
    <div class="card-body">ยินดีต้อนรับจ้าพี่ๆ</div> <br>
  </div>
  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="jpg1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">นภัสกร กิตติเรืองชัย</h4>
    <p class="card-text">ทาด้าาาาา!!!.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <br><br>

  </div>
</div>

<button type="button" class="btn btn-outline-success"
id="alert">ทดสอบใช้งาน Button</button>

<button type="button" class="btn btn-outline-success"
id="alert2">ทดสอบใช้งาน Button</button>


</html>