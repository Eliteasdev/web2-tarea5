<?php
if(isset($_POST['delete'])) {
    $class = $_POST['delete'];
    echo "El valor de \$class es: " . $class;
}
?>