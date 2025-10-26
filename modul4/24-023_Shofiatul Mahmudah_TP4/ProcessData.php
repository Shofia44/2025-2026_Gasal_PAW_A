<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Data</title>
</head>
<body>
    <h3>Posted data:</h3>

<?php
$errors = array();

if (isset($_POST['surname'])) {
    require 'validate.inc';

    // Validasi semua field
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'Email');
    validatePassword($errors, $_POST, 'password');
    validateAddress($errors, $_POST, 'address');

    // Jika ada error
    if ($errors) {
        echo '<h2>Invalid, correct the following errors:</h2>';
        echo '<ul>';
        foreach ($errors as $field => $error)
            echo "<li><b>$field</b>: $error</li>";
        echo '</ul>';

        // tampilkan kembali form dengan data lama
        include 'form.inc';
    } 
    else {
        echo '<h2>Form submitted successfully with no errors</h2>';
    }
} 
else {
    include 'form.inc';
}
?>



</body>
</html>
