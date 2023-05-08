<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Spotify Albums</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <!-- Header -->
            <header class="d-flex align-items-center">
                <div class="container">
                    <img src="img/spotify-logo-png-7057.png" alt="Spotify logo">
                </div>
            </header>
            <!-- End Header -->
            <!-- Main -->
            <main>
                <!-- My container -->
                <div class="ms_container">
                    <!-- Container fluid -->
                    <div class="container-fluid">
                        <!-- Row -->
                        <div class="row row-cols-3 g-5">
                            <!-- Column -->
                            <div class="col" v-for="(album, index) in albums" :key="index">
                                <!-- Card -->
                                <div class="card h-100">
                                    <!-- Card image -->
                                    <div class="card-image text-center pt-3">
                                        <img :src="album.poster" class="card-img-top" alt="album.title">
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body text-center">
                                        <h5 class="title">{{ album.title }}</h5>
                                        <div class="author my-2">{{ album.author }}</div>
                                        <div class="year">{{ album.year }}</div>
                                    </div>
                                </div>
                                <!--End  Card -->
                            </div>
                            <!-- End Column -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container fluid -->
                </div>
                <!-- End My container -->
            </main>
            <!-- End Main -->
        </div>
    </div>
    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>