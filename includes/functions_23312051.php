<?php
// includes/functions.php

function showAlert($message, $type = 'info') {
    $types = [
        'success' => 'alert-success',
        'danger' => 'alert-danger',
        'warning' => 'alert-warning',
        'info' => 'alert-info'
    ];
    
    $class = $types[$type] ?? $types['info'];
    
    echo "<div class='alert $class alert-dismissible fade show position-fixed' style='top:20px;right:20px;z-index:9999;'>
            $message
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          </div>";
}

function redirect($url) {
    header("Location: $url");
    exit();
}
?>