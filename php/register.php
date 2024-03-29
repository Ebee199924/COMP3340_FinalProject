<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Windsor Public Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Register</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / Register</h1>
            <div class="form">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <input placeholder="Enter User Name" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="email" placeholder="Password" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="email" placeholder="Repeat Password" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button class="btn black">Register</button>
                            <h5>Already have an Account? <a href="login.php">Login here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
