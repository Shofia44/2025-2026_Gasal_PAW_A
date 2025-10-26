<?php
// =========================
// 1. Regular Expressions
// =========================
function validateUsername(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z0-9_]{5,15}$/"; // huruf, angka, underscore (5–15 karakter)
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!preg_match($pattern, $field_list[$field_name]))
        $errors[$field_name] = 'invalid (only letters, numbers, underscore, 5–15 chars)';
}

// =========================
// 2. String Functions
// =========================
function validateCity(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name])))
        $errors[$field_name] = 'required';
    else {
        $field_list[$field_name] = trim($field_list[$field_name]); // hapus spasi
        $field_list[$field_name] = strtoupper($field_list[$field_name]); // ubah huruf besar
    }
}

// =========================
// 3. Filter Functions
// =========================
function validateURL(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_URL))
        $errors[$field_name] = 'invalid URL format';
}

function validateFloat(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_FLOAT))
        $errors[$field_name] = 'must be a valid floating-point number';
}

// =========================
// 4. Type Testing
// =========================
function validateNumeric(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!is_numeric($field_list[$field_name]))
        $errors[$field_name] = 'must be numeric';
}

// =========================
// 5. Date Validation
// =========================
function validateDateField(&$errors, $field_list, $day, $month, $year) {
    if (!checkdate($month, $day, $year))
        $errors['birthdate'] = 'invalid date';
}
?>
