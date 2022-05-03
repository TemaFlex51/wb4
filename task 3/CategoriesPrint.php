<?php

include "Create.php";

foreach (fnct::$categoriesNameList as $categoryName) {
    echo "<option>" . $categoryName . "</option>";
}