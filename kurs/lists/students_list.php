<?php
include "../style/header.php";
?>
<?php

$conn = mysqli_connect("localhost", "root", "", "users");
$query = $conn->query("SELECT * FROM students");
while($student = mysqli_fetch_assoc($query))
{
    $students[] = $student;
}

?>



            <?php foreach ($students as $student): ?>
                <div>
                    <form action="" >
                        <p>ID: <?= $student['id'] ?></p>
                        <a href = "student.php?id=<?=$student['id']?>"> <p>ФИО: <?= $student['name'] ?> <?= $student['surname'] ?>. <?= $student['lastname'] ?>.</p></a>
                        <hr>
                    </form>
                </div>
            <?php endforeach; ?>


<?php
include "../style/footer.php";
?>
