<?php
    $strPlainTextPassword = 'my-password';
    $strEncryptedPassword = crypt($strPlainTextPassword, base64_encode($strPlainTextPassword));

    echo $strEncryptedPassword;
?>