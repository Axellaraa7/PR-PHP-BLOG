<?php
// if(empty($_SESSION)) header("Location:".$_SERVER["HTTP_ORIGIN"]."/");
require_once("./controller/UserController.php");
$title = "BLOGGIE / HOME";
$stylesheet = "home";
include_once("./view/templates/head.php");
include_once("./view/templates/headerBlog.php");
$userController = new UserController();
?>
<main>
  <section>
    <div class="">
      <img src="" alt="" class="">
    </div>
    <div class="">
      <form action="" method="post" enctype="multipart/form-data" class="">
        <textarea name="" id="" cols="30" rows="10" placeholder="¿Cómo estas hoy?, Compártelo!" class=""></textarea>
        <div class="">
          <label for="imgPost" class=""></label>
          <input type="file" name="imgPost" id="imgPost" class="">
        </div>
      </form>
    </div>
  </section>
</main>

