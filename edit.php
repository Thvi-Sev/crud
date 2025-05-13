<?php
$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location:/crud/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Establish database connection
    $server= "localhost";
    $username = "root";
    $password = "";
    $database = "database";

    // Create connection
    $connection = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Retrieve existing client information
    $sql = "SELECT * FROM `clients` WHERE id =$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/crud/index.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $dfb = $row["dfb"];
    $decoration = $row["decoration"];
    $medal = $row["medal"];
    $entry = $row["entry"];
    $cff = $row["cff"];
    $bbc = $row["bbc"];

  
    $connection->close();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["Phone"];
    $address = $_POST["address"];
    $dfb = $_POST["dfb"];
    $decoration = $_POST["decoration"];
    $medal = $_POST["medal"]; 
    $entry = $_POST["entry"]; 
    $cff = $_POST["cff"]; 
    $bbc = $_POST["bbc"];
  
 

    // Establish database connection
    $server= "localhost";
    $username = "root";
    $password = "";
    $database = "database";

    // Create connection
    $connection = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMessage = 'All the fields are required';
    } else {
        $sql = "UPDATE `clients` SET name='$name', email='$email', phone='$phone', address='$address', dfb='$dfb',decoration='$decoration',medal='$medal',entry='$entry', cff='$cff', bbc='$bbc' WHERE id=$id";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
        } else {
            $successMessage = "Client updated correctly";
            header("Location: /crud/index.php");
            exit;
        }
    }

    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2 style="font-size: 20px; font-family:Khmer OS; font-weight:1000; color:blue">ទិន្នន័យមន្រ្តីបម្រើការងារ</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>
            ";
        }
        ?>

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ឈ្មោះ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">អ៊ីម៉ែល</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">លេខទូរស័ព្ទ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">អាស័យដ្ឋាន</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ថ្ងៃខែកំណើត</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="dfb" value="<?php echo $dfb; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">គ្រឿងឥស្សរយស</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="decoration" value="<?php echo $decoration; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">មេដាយការងារ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="medal" value="<?php echo $medal; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ថ្ងៃចូលបំរើរការងារ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="entry" value="<?php echo $entry; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ប្រភេទក្របខណ្ឌ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cff" value="<?php echo $cff; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ប្រាក់បៀវត្សប្រចាំខែ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="bbc" value="<?php echo $bbc; ?>">
                </div>
            </div>
           
            <?php
            if (!empty($successMessage)) {
                echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/crud/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>