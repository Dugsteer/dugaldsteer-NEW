<style>
/* General Reset */
<?php include "cardcss.php"?>* {
    margin: 0;
    padding: 0;
}

/* Navbar styling */
.navbar {
    background-color: #9b4c38;
    width: 100%;
    height: 70px;
    position: fixed;
    top: 0;
    z-index: 10;
}

.navbar-nav {
    font-size: 20px;
    justify-content: flex-end;
}

.navbar-nav li {
    font-family: "EB Garamond", serif;
}

/* Navbar link color - light when on dark background */
.navbar-nav li a {
    padding: 20px;
    color: #f8f9fa;
    /* Light color for visibility on dark background */
    text-decoration: none;
}

.navbar-nav li a:hover {
    color: #413333;
    background-color: #f4e0cb;
}

/* Change link color when navbar is collapsed (dropdown over hero section) */
.navbar-collapse.show .navbar-nav li a {
    color: #413333;
    /* Darker color for visibility on light background */
}

/* Hero Section */
#hero-section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    background-image: url('https://live.staticflickr.com/65535/49246868201_e783db890a.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 20px;
    padding-top: 50px;
}

.hero-content {
    display: flex;
    justify-content: center;
    /* Spreads image and text horizontally */
    align-items: center;
    width: 100%;
    /* Ensure the hero-content takes full width */
    max-width: 1200px;
    /* Optional: to limit max width */
}

.hero-image img {
    width: 300px;
    height: auto;
    border-radius: 50%;
    margin-right: 20px;
}

.hero-text {
    color: white;
    text-align: center;
}

.hero-text h1 {
    font-family: "EB Garamond", serif;
    font-size: 90px;
    color: #413333;
}

.hero-text p {
    font-family: "EB Garamond", serif;
    font-size: 50px;
    font-style: italic;
    font-weight: lighter;
    color: #413333;
}

/* Media query for screens smaller than 1000px */
@media only screen and (max-width: 1000px) {
    .hero-content {
        flex-direction: column;
        padding-top: 70px;
        x
        /* Stacks the image under the text */
    }

    .hero-image {
        margin-bottom: 20px;
        /* Space between image and text when stacked */
    }

    .hero-text h1 {
        font-size: 60px;
        /* Adjust heading size for smaller screens */
    }

    .hero-text p {
        font-size: 30px;
        /* Adjust paragraph size for smaller screens */
    }
}


/* Projects Section */
#projects {
    box-sizing: inherit;
    text-align: center;
    padding-top: 60px;
    color: white;
    background-color: #9b4c38;
}

#projects h2 {
    font-family: "EB Garamond", serif;
    font-weight: lighter;
    font-size: 40px;
}

.projects-grid {
    display: grid;
    margin: auto;
    justify-content: center;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-gap: 30px;
    padding: 20px;
}

.project-tile {
    width: 100%;
    background-color: white;
    padding: 10px;
    border-radius: 8px;
}

.project-tile img {
    max-width: 100%;
    border-radius: 8px;
}

/* Responsive styling */
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .project-tile {
        width: 100%;
    }
}

</style>
