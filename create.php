<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "database";

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli($server, $username, $password, $database);

// Initialize variables
$name = "";
$email = "";
$phone = "";
$address = "";
$dfb = "";
$decoration = "";
$medal = "";
$entry = "";
$cff = "";
$bbc = "";
$filename = "";
// $framework= "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"]; // Changed to lowercase
    $address = $_POST["address"];
    $dfb = $_POST["dfb"];
    $decoration = $_POST["decoration"];
    $medal = $_POST["medal"]; 
    $entry = $_POST["entry"]; 
    $cff = $_POST["cff"]; 
    $bbc = $_POST["bbc"];
    $filename = $_POST["filename"];
   



    

    // Prepare the SQL statement
$stmt = $connection->prepare("INSERT INTO clients (name, email, phone, address, dfb, decoration, medal, entry, cff, bbc, filename) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?)");

// Bind parameters
$stmt->bind_param("sssssssssss", $name, $email, $phone, $address, $dfb, $decoration, $medal, $entry, $cff, $bbc, $filename );

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = "Client added successfully!";
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    $stmt->close();

    // Reset form fields
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $dfb = "";
    $decoration = "";
    $medal = "";
    $entry = "";
    $cff = "";
    $bbc = "";
    $filename = "";

    // $framework="";
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>មន្ត្រីថ្មី</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>មន្ត្រីថ្មី</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }

        if (!empty($successMessage)) {
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form action="" method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ឈ្មោះ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">អ៊ីម៉ែល</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">លេខទូរស័ព្ទ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">អាស័យដ្ឋាន</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo htmlspecialchars($address); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ថ្ងៃខែកំណើត</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="dfb" value="<?php echo htmlspecialchars($dfb); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">គ្រឿងឥស្សរយស</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="decoration" value="<?php echo htmlspecialchars($decoration); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">មេដាយការងារ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="medal" value="<?php echo htmlspecialchars($medal); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ថ្ងៃចូលបំរើរការងារ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="entry" value="<?php echo htmlspecialchars($entry); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ប្រភេទក្របខណ្ឌ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cff" value="<?php echo htmlspecialchars($cff); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ប្រាក់បៀវត្សប្រចាំខែ</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="bbc" value="<?php echo htmlspecialchars($bbc); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">រូបភាព</label>
                <div class="col-sm-6">
                    <input type="file" name="filename" accept="image/*" /> <br><br>
                </div>
            </div>

             
        <?php
            if (isset($_FILES['filename'])) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                $fileType = $_FILES['filename']['type'];

                if (in_array($fileType, $allowedTypes)) {
                    // Move the uploaded file to the uploads directory
                    move_uploaded_file($_FILES['filename']['tmp_name'], 'uploads/' . $_FILES['filename']['name']);
                    echo "File uploaded successfully!";
                } else {
                    echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
                }
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