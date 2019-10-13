<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERT-DB</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/madol.css">
    <script  src="../js/jquery-3.3.1.min.js"></script>
    <script  src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">

        function popup_nurse_show(){
            $('#showComplete').modal('show');
          }
        function gotoIndex(){
            window.location = "../";
        }
    </script>
</head>
<body>
<div class="modal fade" id="showComplete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ข้อความ : </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body" align="center">
            บันทึกข้อมูลเสร็จเรียบร้อย...
          </div>
          <div class="modal-footer">
            <div class="modal-body" align="right">
              <button type="button" class="btn btn-info" onclick="gotoIndex()" data-dismiss="modal"> ปิด </button>
            </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>
<?php
include_once '../config/DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sql = "INSERT INTO $tbname (col_id, col_date, col_company, col_user, col_position, col_fastness, detail_fastness, col_quality, detail_quality, col_neatness, detail_neatness";
    $sql .= ", col_courtesy, detail_courtesy, col_satis, detail_satis, col_quality_product, col_price_product, col_credit_payment, col_quality_company, col_reputation_company";
    $sql .= ", col_time_delivery, col_comment, col_person_record, col_date_record)";
    $sql .= "VALUES " . "('','". $_POST["inputdate"] ."','". $_POST["companyname"] ."','". $_POST["userperson"] ."','". $_POST["department"] ."','". $_POST["ra_fastness"] ."','". $_POST["detail_fastness"] ."'";
    $sql .= ",'". $_POST["ra_quality"] ."','". $_POST["detail_quality"] ."','". $_POST["ra_neatness"] ."','". $_POST["detail_neatness"] ."','". $_POST["ra_courtesy"] ."','". $_POST["detail_courtesy"] ."'";
    $sql .= ",'". $_POST["ra_satis"] ."','". $_POST["detail_satis"] ."','". $_POST["txt_quality"] ."','". $_POST["txt_price"] ."','". $_POST["txt_credit"] ."','". $_POST["txt_company"] ."'";
    $sql .= ",'". $_POST["txt_reput"] ."','". $_POST["txt_delivery"] ."','". $_POST["comment"] ."','". $_POST["usersave"] ."','". $_POST["datesave"] ."')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">',
              'popup_nurse_show();',
            '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
            
}else{
    echo "<meta http-equiv='refresh' content='0; URL=../'>";
}
$conn -> close();
?>
