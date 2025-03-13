<?php
// preview.php - Form verilerini gösteren sayfa

// Verileri al ve boş olup olmadığını kontrol et
$name = !empty($_POST['name']) ? $_POST['name'] : 'Not provided';
$username = !empty($_POST['username']) ? $_POST['username'] : 'Not provided';
$password = !empty($_POST['password']) ? $_POST['password'] : 'Not provided';
$address = !empty($_POST['address']) ? $_POST['address'] : 'Not provided';
$country = !empty($_POST['country']) ? $_POST['country'] : 'Not provided';
$zip = !empty($_POST['zip']) ? $_POST['zip'] : 'Not provided';
$email = !empty($_POST['email']) ? $_POST['email'] : 'Not provided';
$sex = !empty($_POST['sex']) ? $_POST['sex'] : 'Not provided';
$language = !empty($_POST['language']) ? $_POST['language'] : [];
$about = !empty($_POST['about']) ? $_POST['about'] : 'Not provided';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: auto; }
        p { font-size: 18px; }
        .output { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Preview</h2>

        <!-- Verileri Göster -->
        <p>Name: <span class="output"><?php echo $name; ?></span></p>
        <p>Username: <span class="output"><?php echo $username; ?></span></p>
        <p>Password: <span class="output"><?php echo $password; ?></span></p>
        <p>Address: <span class="output"><?php echo $address; ?></span></p>
        <p>Country: <span class="output"><?php echo $country; ?></span></p>
        <p>ZIP Code: <span class="output"><?php echo $zip; ?></span></p>
        <p>Email: <span class="output"><?php echo $email; ?></span></p>
        <p>Sex: <span class="output"><?php echo $sex; ?></span></p>
        <p>Language: <span class="output"><?php echo $language ? implode(", ", $language) : 'Not provided'; ?></span></p>
        <p>About: <span class="output"><?php echo $about; ?></span></p>
    </div>
</body>
</html>
