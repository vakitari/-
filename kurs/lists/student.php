<?php
include "../style/header.php";
?>
<?php


$conn = mysqli_connect("localhost", "root", "", "users");
$query = $conn->query("SELECT * FROM theme");
while($theme = mysqli_fetch_assoc($query))
{
    $themes[] = $theme;
}


?>


        <p>Выберите предме:</p>
        <?php foreach ($themes as $theme): ?>
            <form action="" >
                <p> <a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-25-hover"  href = "../add/addDate.php?id=<?=$theme['id']?>"><?= $theme['name_theme'] ?>

                    </a></p>
                <hr>
            </form>
        <?php endforeach; ?>

<?php
include "../style/footer.php";
?>