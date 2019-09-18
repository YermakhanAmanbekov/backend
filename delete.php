include("config.php");
$id = $_GET['id'];
$rows = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
header("Location:index.php");
