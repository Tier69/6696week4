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
    <h1>โปรแกรมเก็บข้อมูลสุนัข</h1>
    <form class="row g-3">
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">รหัสประจำตัวสุนัข</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">ชื่อของสุนัข</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-2">
    <label for="inputAddress" class="form-label">สายพันธุ์ของสุนัข</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  <div class="col-1">
    <label for="inputAddress2" class="form-label"> เพศของสุนัข</label>
    <input type="text" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">วันเดือนปีเกิดของสุนัข</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-1">
    <label for="inputState" class="form-label">สีขนของสุนัข</label>
    <input type="text" class="form-control" id="inputState">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label"> หมายเลขไมโครชิพ (หากมี) </label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-5">
    <label for="name" class="form-label"> ชื่อของเจ้าของสุนัข</label>
    <input type="text" class="form-control" id="neme">
  </div>
  <div class="col-md-5">
    <label for="tel" class="form-label"> เบอร์โทรศัพท์ติดต่อของเจ้าของ</label>
    <input type="text" class="form-control" id="tel">
  </div>
  <div class="col-md-12">
    <label for="p" class="form-label"> ข้อมูลเกี่ยวกับประวัติสุขภาพของสุนัข (เช่น โรคประจำตัว, วัคซีน, การผ่าตัด)</label>
    <input type="text" class="form-control" id="p">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>

  <button type="submit" class="btn btn-success" id="alert">บันทึกข้อมูล</button>

  <button type="reset" class="btn btn-danger">ยกเลิกบันทึกข้อมูล</button>
</form>

<br><br>
   พัฒนาโดย 664485028 นภัสกร กิตติเรืองชัย หมู่เรียน 66/96 <br>


</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
$('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
    </script>


</html>