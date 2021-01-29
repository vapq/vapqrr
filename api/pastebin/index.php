<html>
<body>
<input type="submit" name="btnSubmit" value="Send API Request" />
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Something posted

    if (isset($_POST['btnSubmit'])) {
        echo 'Error 404 API Failed to request!'
    }
}
?>