<?php
$errors = array();

if (isset($_POST['username'])) {
    require 'validate_extra.inc';

    // Panggil semua fungsi validasi
    validateUsername($errors, $_POST, 'username');
    validateCity($errors, $_POST, 'city');
    validateURL($errors, $_POST, 'website');
    validateFloat($errors, $_POST, 'gpa');
    validateNumeric($errors, $_POST, 'age');
    validateDateField($errors, $_POST, $_POST['day'], $_POST['month'], $_POST['year']);

    if ($errors) {
        echo '<h3>Invalid, correct the following errors:</h3>';
        echo '<ul>';
        foreach ($errors as $field => $error)
            echo "<li><b>$field</b>: $error</li>";
        echo '</ul>';
        include 'form_explore.inc';
    } 
    else {
        echo '<h2>All data valid! ✅</h2>';
    }
} 
else {
    include 'form_explore.inc';
}
?>
