<?php
include "../style/header.php";

?>

<div class="col-6">
    <h1>Страница добавления группы</h1>
    <h5 class="mt-4">Название группы</h5>
    <div class="input-group mt-2">
        <input type="text" class="form-control" placeholder="ИС-4" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="mt-3">
        добавить студента
    </div>
    <?php if(!$_SESSION['showAdd']) {?>


    <h1>
        <a href="../service/active.php"  class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover">+</a>
    </h1>
</div>
<?php }else{?>
        <label class="form-label mt-3" > </label>

        <form action="../service/AddController.php" method="POST">
            <div class="col-5">
            <label class="form-label mt-3"  > Фамилия</label>
            <input class="form-control mt-1 " name="name">
            <label class="form-label mt-3"  > Имя</label>
            <input class="form-control mt-1" name="surname"  >
            <label class="form-label mt-3"  > Отчество</label>
            <input class="form-control mt-1" name="lastname" >
            </div>
            <div class="col-3">
            <input class="form-control mt-2 " type="submit">
            </div>
        </form>
<?php }?>
<?php
include "../style/footer.php";
?>