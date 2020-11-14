<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruity Project</title>

    <link rel="icon" href="images/logo.svg" size="any" type="image/svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <header>

            <img src="images/logo.svg" class="logo" />

            <input type="search" class="input-search" placeholder="Search Here">

        </header>

        <section class="content">

            <nav>
                <ul class="navbar">
                    <li><a href="#about">About</a></li>
                    <li><a href="#seasonal" class="active">Seasonal</a></li>
                    <li><a href="#category">Category</a></li>

                </ul>
            </nav>

            <div class="fruit-definition">
                <h1>Pineapple</h1>
                <p>The pineapple is a tropical plant with an edible fruit, also called a pineapple and the most economically significant plant in the family Bromeliaceae.</p>

            </div>

            <div class="fruit-image">
                <img src="images/pineapple.png" alt="pineapple">
            </div>

            <div class="fruit-facts">

                <div class="health-benefits">
                    <img class="health-benefit-line" src="images/straight-line.png" alt="straight red">
                    <h2>Health Benefits</h2>
                    <p>Pineapple contains significant amount of vitamin C. a water-soluble antioxidant that fights cell damage.</p>
                </div>

                <div class="nutrion-values">
                    <img class="nutrion-value-line" src="images/l-line.png" alt="L form line">
                    <h2>Nutriotional Values</h2>
                    <ul>
                        <li>Calories 74</li>
                        <li>Sugars 13.7 g</li>
                        <li>Carbohydrate 19.5 g</li>
                    </ul>

                </div>

            </div>

        </section>
        <footer>
            <div class="socialmedia-icons">
                <ul>

                    <li><a href="#" class="fa fa-lg fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-lg fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-lg fa-instagram"></a></li>

                </ul>
            </div>

            <div class="arrows prev"></div>
            <div class="left-arrow-line"></div>
            <div class="left-arrow-circle"></div>

            <div class="image-slider">
                <div class="left-fruit">
                    <img class="left-image" src="images/left_image.png" alt="">
                    <p>Quince</p>
                </div>
                <div class="center-fruit">
                    <img class="main-fruit" src="images/center_image.png" alt="">
                    <p>Pineapple</p>
                </div>
                <div class="right-fruit">
                    <img class="right-image" src="images/right_image_sample.png" alt="">
                    <p>Green Apple</p>
                </div>
            </div>
            <div id="left-arrow">
                <div class="arrows next"></div>
                <div class="right-arrow-line"></div>
                <div class="right-arrow-circle"></div>

            </div>


        </footer>

    </div>

</body>

</html>