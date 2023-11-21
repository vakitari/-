
<?php
include "../style/header.php";
?>


        <form action="">
            <label class="col-lg-2 mt-2">Выберите дату


                    <select class="form-select mt-1">
                        <?php

                        for ($year = 2000; $year <= 2023; $year++) {
                            echo "<option value='$year'>$year</option>";
                        }
                        ?>
                    </select>

                    <select class="form-select mt-1">
                        <?php
                        $mon =["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
                        for ($month = 0; $month <= 11; $month++) {
                            echo "<option value='$mon[$month]'>$mon[$month]</option>";
                        }
                        ?>
                    </select>

                    <select class="form-select mt-1">
                        <?php
                        for ($day = 1; $day <= 31; $day++) {
                            echo "<option value='$day'>$day</option>";
                        }
                        ?>
                    </select>


            </label>

        </form>
<?php
include "../style/footer.php";
?>