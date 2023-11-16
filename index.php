<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopy_Ecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class=" p-2">
    <div class="container d-flex justify-content-between align-items-center w-100">
        <!-- Currency Dropdown -->
        <div class=" d-flex">
            <div class="dropdown">
                <button class="dropdown-toggle bg-transparent " id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    En
                </button>
                <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <li><a class="dropdown-item" href="#">Bn</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle bg-transparent " id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Tk
                </button>
                <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <li><a class="dropdown-item" href="#">USD</a></li>
                </ul>
            </div>
        </div>
        <!-- Join Us and Sign In Links -->
        <div class="d-flex gap-2">
            <a class="nav-link" href="#">Join Us</a>
            <a class="nav-link" href="#">Sign In</a>
        </div>
    </div>

    <?php require 'includes/Header.php'; ?>
    <?php require 'includes/Slider.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>