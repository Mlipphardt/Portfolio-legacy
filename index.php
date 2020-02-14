<?php echo date('l, F jS, Y'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <!-- Fade in for content -->
    <script src="./assets/javascript/fadein.js"></script>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Matthew Lipphardt | Web Developer</title>

</head>

<body>

    <div id = "banner">
        <h1 id = "name" class="display-4">Matthew Lipphardt</h1>
    </div>

<div class = "bg-dark">
    <div class = "container">
        
        <!-- Bio -->
        <div class = "row">

            <div class = "col-md-12 jumbotron mx-auto mt-3 bg-secondary">
                             
                <p>Are you looking for the chance to expand your brand, release a killer app, or share your vision with the world? Then let's talk. </p>

                <p>I am Matthew Lipphardt, a web developer based out of Titusville, Florida. Initially a graduate of the University of the Central Florida's full-stack flex bootcamp, I've a wide array of projects done both solo and with teams that you can browse by taking a look at my Github page! </p>
                    
                <p>With flexible skills that can tackle either the front or back-end of your project, I can take your vision and make it a reality. I've expertise with HTML, CSS, and Javascript's latest frameworks. I can style your page with perfect precision, make responsive and addictive games, or streamline your server-side processes for peak efficiency. </p>
                    
                <p>But don't take my word for it, scroll down to my Portfolio and take a look for yourself!</p>
                    
                <p>When you're ready to start, contact me!</p>

                <ul class = "links">
                    <li>Github: <a href="https://www.github.com/Mlipphardt">Mlipphardt</a></li>
                    <li>Linkedin: <a href="https://www.linkedin.com/in/matthew-lipphardt-8b2356135/">Matthew Lipphardt</a></li>
                </ul>

            </div>

        </div>

        <!-- Portfolio  -->
        <div class = "row my-1">
            <div class = "col-md-12">
                <div class="card bg-secondary text-center">
                    <div class="card-body">
                        <img class="card-img-top w-50 h-50" src="./assets/images/fanfixx.png" alt="Card image cap">
                        <h5 class = "card-title mt-3"> Fanfixx </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nam itaque quasi temporibus id ratione, nisi iure expedita tempora architecto, incidunt quos quas. Consectetur ab deserunt fugit repudiandae ex odit?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi enim voluptates fugit voluptatum? Placeat sed expedita id. Sint repudiandae exercitationem, nulla neque minus sed cum molestias aspernatur odio fuga vero?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum asperiores praesentium consequatur inventore obcaecati voluptas accusamus odio architecto, blanditiis numquam incidunt, commodi ipsum libero alias minima quas. Quam, sunt sit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class = "row my-3">
            <div class = "col-md-12">
                <div class="card bg-secondary text-center">
                    <div class="card-body">
                        <img class="card-img-top w-50 h-50" src="./assets/images/trainscheduler.png" alt="Card image cap">
                        <h5 class = "card-title mt-3"> Train Scheduler </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nam itaque quasi temporibus id ratione, nisi iure expedita tempora architecto, incidunt quos quas. Consectetur ab deserunt fugit repudiandae ex odit?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi enim voluptates fugit voluptatum? Placeat sed expedita id. Sint repudiandae exercitationem, nulla neque minus sed cum molestias aspernatur odio fuga vero?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum asperiores praesentium consequatur inventore obcaecati voluptas accusamus odio architecto, blanditiis numquam incidunt, commodi ipsum libero alias minima quas. Quam, sunt sit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class = "row my-3">
            <div class = "col-md-12">
                <div class="card bg-secondary text-center">
                    <div class="card-body">
                        <img class="card-img-top w-50 h-50" src="./assets/images/MovieTrivia.png" alt="Card image cap">
                        <h5 class = "card-title mt-3"> Movie Trivia Game </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nam itaque quasi temporibus id ratione, nisi iure expedita tempora architecto, incidunt quos quas. Consectetur ab deserunt fugit repudiandae ex odit?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi enim voluptates fugit voluptatum? Placeat sed expedita id. Sint repudiandae exercitationem, nulla neque minus sed cum molestias aspernatur odio fuga vero?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum asperiores praesentium consequatur inventore obcaecati voluptas accusamus odio architecto, blanditiis numquam incidunt, commodi ipsum libero alias minima quas. Quam, sunt sit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class = "row mt-5">
            <div class = "col-md-12 jumbotron bg-secondary">
                <h1 class="display-4">Contact Me</h1>
                <ul class = "links">
                    <li>Github: <a href="https://www.github.com/Mlipphardt">Mlipphardt</a></li>
                    <li>Linkedin: <a href="https://www.linkedin.com/in/matthew-lipphardt-8b2356135/">Matthew Lipphardt</a></li>
                </ul>
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Send me a message!</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </form>

            </div>
        </div>
        
    </div>
</div>
</body>

</html>