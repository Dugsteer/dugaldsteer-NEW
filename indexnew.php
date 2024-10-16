<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dugald Steer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Montserrat:400,800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <?php include "includes/style.php"?>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <!-- PHP include for the SVG base64 logo -->
            <?php include "includes/bennu.php" ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#biog">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://anglesmontalt.com/?language=eng.php" target="_blank">Teaching</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#history">Translation</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="hero-content">
            <div class="hero-image">
                <img src="img/Dugwebpic.jpg" alt="Your Photo">
            </div>
            <div class="hero-text">
                <h1>Dugald Steer</h1>
                <p>Writer, Teacher, Translator, Web</p>
            </div>
        </div>
    </section>


    <?php include "includes/cards.php" ?> <?php include "includes/footer.php" ?>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
