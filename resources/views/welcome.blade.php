<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Welcome Page</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Hero Section Styles */
        .hero {
            background-color: #007bff;
            color: #fff;
            padding: 100px 0;
        }


        .hero h1 {
            font-size: 3.5em;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.25em;
        }

        /* About Section Styles */
        .about {
            padding: 80px 0;
        }

        .about h2 {
            color: #007bff;
        }

        .about img {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            /* Box shadow added */
        }

        /* Services Section Styles */
        .services {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .services h2 {
            color: #007bff;
        }

        .services p {
            font-size: 1.25em;
            margin-bottom: 40px;
        }

        .services h4 {
            color: #007bff;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            padding: 10px 20px;
            font-size: 1.25em;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="display-4">Welcome to Our Amazing Website</h1>
                    <p class="lead">Explore the possibilities with us.</p>
                    <a href="#" class="btn btn-primary btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, non. Itaque aperiam at harum officiis hic possimus dolore fugiat laudantium, velit excepturi, tenetur, adipisci ipsum. Beatae molestiae officiis recusandae ipsum sapiente! Iusto, at non expedita, voluptatem adipisci soluta, pariatur laborum dolorum debitis doloremque similique! Quibusdam vero, facere magni eveniet repellendus iure quae est incidunt enim dicta deserunt debitis at voluptatum minima sunt quisquam perferendis! Maxime, repellendus, quo unde facilis, nisi tenetur deleniti quod natus debitis nemo corporis vitae beatae dicta illo eveniet obcaecati numquam neque porro nesciunt doloribus? Nostrum maxime fugit laudantium debitis sequi soluta corporis velit fugiat animi repellendus.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/400" alt="About Us Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Services</h2>
                    <p>Discover the services we offer to meet your needs.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4">
                    <h4>Development</h4>
                    <p>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                </div>
                <div class="col-md-4">
                    <h4>Marketing</h4>
                    <p>Vulputate eu pharetra nec, mattis ac neque.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>