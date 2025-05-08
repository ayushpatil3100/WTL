<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'set') {
        $_SESSION['username'] = 'JohnDoe';
    }

    if ($action === 'destroy') {
        session_unset();     
        session_destroy();   
    }

    // header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Session Demo</title>
</head>
<body>

<h2>Session Demo</h2>

<form method="POST">
  <button name="action" value="set">Set Session</button>
  <button name="action" value="destroy">Destroy Session</button>
</form>

<p>
<?php
if (isset($_SESSION['username'])) {
    echo "Session username is: " . $_SESSION['username'];
} else {
    echo "No session is set.";
}
?>
</p>

</body>
</html>