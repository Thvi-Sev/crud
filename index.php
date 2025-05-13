<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ទូរទស្សន៍ជាតិកម្ពុជា</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="icon" href="./img/tst.jpg">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
</head>

<body>
    <div class="big-box">
        <div class="box1">
            <img src="./img/tvk.jpg" alt="Logo">
        </div>
        <h5>ទូរទស្សន៍ជាតិកម្ពុជា</h5>

        <div class="box-icon">
            <ul>
                <li><i class="fa-solid fa-circle-info"></i>  ព័ត៌មានជាតិ</li>
                <li><i class="fa-solid fa-medal"></i>  កម្សាន្ត</li>
                <li><i class="fa-brands fa-artstation"></i>  សិល្បៈ</li>
                <li><i class="fa-solid fa-microchip"></i>  បច្ចេកវិទ្យា</li>
                <li><i class="fa-solid fa-money-bill"></i>  សេដ្ឋកិច្ច</li>
                <li><i class="fa-solid fa-rectangle-ad"></i>  ផ្សាយពាណិជ្ជកម្ម</li>
            </ul>
        </div>
    </div>    
    <div class="container">
        <div class="header">
            <div class="nav">   
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">ទទកពីទូរទស្សន៏ជាតិកម្ពុជា</a>
                    <i class="fa-solid fa-tv"></i>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <p>ទទក/TVK</p>
                    </div>
                    <div class="icon-case">
                        <img src="./img/ទទកពីទូរទស្សន៏ជាតិកម្ពុជា.jpg" alt="TVK">
                    </div>
                </div>
    
                <div class="card">
                    <div class="box">
                        <p>មន្ត្រីបម្រើការងារ</p>
                    </div>
                    <div class="icon-case">
                        <img src="./img/company-culture.png" alt="Company Culture">
                    </div>
                </div>
    
                <div class="card">
                    <div class="box">
                        <p>ពេលវេលា</p>
                    </div>
                    <div class="icon-case">
                        <img src="./img/time.png" alt="Time">
                    </div>
                </div>
    
                <div class="card">
                    <div class="box">
                        <p>ប្រាក់បៀវត្យប្រចាំឆ</p>
                    </div>
                    <div class="icon-case">
                        <img src="./img/price.jpg" alt="Salary">
                    </div>
                </div>
            </div>
    
          

        <!-- <div class="container"> -->
        <h2 class="text-center" style="font-size: 25px; font-family:Khmer OS; font-weight:800; color:blue">ទិន្នន័យមន្រ្តីបម្រើការងារ</h2>
            <a class="btn btn-outline-success border-2 rounded-0" href="/crud/create.php" role="button" style="font-size: 15px; font-family:Khmer OS; font-weight:1000; color:blue"><i class="fa-solid fa-plus"></i>  បន្ថែម</a>
            <br>
            <table class="table table table-striped my-4">
                <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">ឈ្មោះ</th>
                        <th class="text-center">អ៊ីម៉ែល</th>
                        <th class="text-center">លេខទូរស័ព្ទ</th>
                        <th class="text-center">អាស័យដ្ឋាន</th>
                        <th class="text-center">ថ្ងៃខែកំណើត</th>
                        <th class="text-center">គ្រឿងឥស្សរយស</th>
                        <th class="text-center">មេដាយការងារ</th>
                        <th class="text-center">ថ្ងៃចូលបំរើរការងារ</th>
                        <th class="text-center">ប្រភេទក្របខណ្ឌ</th>
                        <th class="text-center">ប្រាក់បៀវត្សប្រចាំខែ</th>
                        <th class="text-center">រូបភាព</th>

                                
                        
                        <th class="text-center">ផ្សេងៗ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "database";
                        $connection = new mysqli($server, $username, $password, $database);

                        if ($connection->connect_error) {
                            die("connection failed: " . $connection->connect_error);
                        }

                        $sql = "SELECT * FROM clients";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("invalid query: " . $connection->error);
                        }

                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td class='text-center'>$row[id]</td>
                                <td class='text-center'>$row[name]</td>
                                <td class='text-center'>$row[email]</td>
                                <td class='text-center'>$row[phone]</td>
                                <td class='text-center'>$row[address]</td>
                                <td class='text-center'>$row[dfb]</td>
                                <td class='text-center'>$row[decoration]</td>
                                <td class='text-center'>$row[medal]</td>
                                <td class='text-center'>$row[entry]</td>
                                <td class='text-center'>$row[cff]</td>
                                <td class='text-center'>$row[bbc]</td>
                                
                                <td class='text-center' >
                                <img src='uploads/$row[filename]' alt='$row[filename]' style='width:40px; height:auto; margin-right: 5%; '>
                                </td>



                                                                                         
                                <td class='text-center'>
                                    <a class='btn btn-primary btn-sm' href='/crud/edit.php?id=$row[id]'>កែ</a>
                                    <a class='btn btn-danger btn-sm' href='/crud/delete.php?id=$row[id]'>លុប</a>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <!-- </div> -->
    </div> 
</body>
</html>