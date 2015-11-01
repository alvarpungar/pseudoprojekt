<form action="?" method="POST">
    <label for="kass">Sisesta kass:</label> <input type="text" id="kass" name="kass">
</form>

<?php

if (!empty($_POST['kass'])) {
    echo "Kass oli: " . $_POST['kass'];
}

?>
