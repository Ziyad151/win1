<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';

include './inc/db_close.php';
?>


<?php include_once './parts/header.php'; ?>


  <div class="p-4 p-md-5 mb-4 text-white rounded text-center bg-dark">
    <div class="col-md-6 mx-auto px-0">
  <img src="images/project3.jpg"
   alt="">
      <h1 class="display-4 fst-italic"> المشروع الفائز  </h1>
      <p class="lead my-3">زياد  عبدالعزيز البركاتي</p>
      <p class="lead fw-normal">المتبقي على تسليم المشروع</p>
      <h3 id="countdown"></h3>

    </div>
  
<h2> للدخول بالسحب </h2>
 <div class="container">
 <ul class="list-group list-group-flush text-center text-white">
  <li class="list-group-item">سيتم البث المباشر عبر القنوات الرسمية المعلنة</li>
  <li class="list-group-item">خلال هذه الفترة سيتم فتح صفحة التسجيل لتسحيل اسمك وإيميلك</li>
  <li class="list-group-item">بنهاية البث للعد التنازي سيتم اختيار المشروع الفائز من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">المشروع الرابح سيحصل على جائزة قيمة</li>

</ul>
  </div>
</div>



<div class="p-4 p-md-5 mb-4 text-dark rounded text-right bg-light">
    <div class="col-md-6 mx-auto px-0">

<form action="index.php" method="POST">
    <h3 class="text-center" mb-3>الرجاء أدخل معلوماتك</h3>
  <div class="mb-3">
    <label for="FirstName" class="form-label">الإسم الأول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?? '' ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $Error['FirstNameError'] ?></div>
  </div>
  
  <div class="mb-3">
    <label for="LastName" class="form-label">إسم العائلة</label>
    <input type="text" name="LastName" class="form-control" id="LastName" value="<?php echo $LastName ?? '' ?>"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $Error['LastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="Email" class="form-control" id="Email" value="<?php echo $Email ?? '' ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $Error['EmailError'] ?></div>
  
  
  <button type="submit" name="submit" class="btn btn-primary ">أرسل</button>
  
</form>

</div>
  </div>
    
<!--
     <form action="index.php"  method="POST">
        <input type="text" name="FirstName" id="FirstName" placeholder="الاسم الأول">
        <input type="text" name="LastName" id="LastName" placeholder="اسم العائلة">
        <input type="text" name="Email" id="Email" placeholder="الإيميل">
        <input type="submit" name="submit" value="send">
     </form> 
-->
      
  

<div class="loader-con"><
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas> </div>
</div>

<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5" >
<button type="button" id="winner" class="btn btn-primary" >
  المشروع الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <?php foreach($users as $user): ?>
        <h5 class="disply-1 text-center modal-title" id="ModalLabel">المشروع الفائز في المسابقة</h5>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php echo htmlspecialchars($user['FirstName']) . ' '. htmlspecialchars($user['LastName']) ?>
    </div>
  </div>
</div>

 <!-- <div id= "cards" class="row mb-5 pb-5">

    <div class="col-md-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php echo htmlspecialchars($user['Email']); ?></p>
            </div>
        </div>
    </div> -->


<?php include_once './parts/footer.php'; ?>
