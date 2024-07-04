<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active text-black --bs-nav-link-hover-color:blue;" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Contact</a>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row bg-dark pt-3">
            <div class="col-12 d-flex justify-content-around">
                <div class="float-start align-self-center">
                    <ul class="d-flex list-unstyled">
                        <li class="text-light me-5"><i class="fa-solid fa-phone"></i> 011 4600 2100</li>
                        <li class="text-light"><i class="fa-solid fa-clock"></i> Mon-Sat 9am - 7pm</li>
                        <i class="fa-solid fa-clock"></i>
                    </ul>
                </div>
                <div class="float-end align-self-center">
                    <ul class="d-flex justify-between mx-auto">
                        <h5 class="text-light">Follow: </h5>
                        <i class="text-light p-1 ps-3 pe-4 fab fa-facebook-f"></i>
                        <i class="text-light p-1 pe-4 fab fa-twitter"></i>
                        <i class="text-light p-1 pe-4 fab fa-instagram"></i>
                        <i class="text-light p-1 pe-4 fa-solid fa-location-dot"></i>
                        <i class="text-light p-1 pe-4 fa-solid fa-phone"></i>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-3 mx-5">
            <div class="col-12 d-flex justify-content-between">
                <div class="float-start pt-2">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="float-end pt-2">
                    <img src="images/best-design.jpg" alt="">

                </div>
            </div>
        </div>
    </div>


    <ul class="nav d-flex justify-content-evenly mx-5 mt-3">
        <li class="nav-item">
            <a class="nav-link fs-3 active text-dark" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 text-dark" href="#">What we offer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 text-dark" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 text-dark" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 text-dark" href="#">Home</a>
        </li>
    </ul>

    <section id="bannersection">
        <div class="container  mt-2">
            <div class="row">
                <div class="col-5 my-5">
                    <h2 class="text-light"><i>Designed in Italy</i></h2>
                    <h2 class="mb-5 text-light"><i>Built in India</i></h2>
                    <hr class="bg-danger mb-5" style="height: 8px;">
                    <h3 class="text-light">What we offer</h3>
                    <h3 class="text-light">Creo Vs Other Brands</h3>
                    <h3 class="text-light">Why choose CREO</h3>
                    <h3 class="text-light">Book a Designer</h3>
                    <h3 class="text-light">Client Testimonials</h3>
                    <h3 class="text-light">Our Projects</h3>
                    <h3 class="text-light">Get Quote</h3>
                    <h3 class="text-light">Contact Us</h3>
                </div>
                <div class="col-7 align-self-center">
                    <div class="row d-flex bg-light ps-3 pe-3 pt-3 pb-3">
                        <div class="col-5">
                            <img src="images/form-img.jpg" class="mt-1 mb-1" alt="">
                        </div>
                        <div class="col-7 align-self-center">
                            <form>
                                <h5>Get the Best Designed ​Kitchen & Wardrobe</h5>
                                <div class="mb-3 pt-3 w-100">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email Address">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name">
                                </div>
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                    <option selected>Enquiry for</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                    <option selected>Your Budget</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Mobile Number">
                                </div>
                                <div class="d-grid gap-2">

                                    <button type="submit" class="btn btn-danger btn-block">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-5 mt-5 pt-5">
                    <h5 class="mb-5">WHAT WE OFFER</h5>
                    <h2 class="">From Kitchen to Wardrobe,</h2>
                    <h2 class="">We've Got You Covered!</h2>
                    <hr class="bg-danger mb-5" style="height: 8px;">
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 6000+ Happy Customers</h3>
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 5000+ Kitchens Installed</h3>
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 7000+ Pieces of Furniture Delivered</h3>
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 15 Design Brands Worldwide</h3>
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 10-Year Warranty by Creo Interiors</h3>
                    <h3 class=""><i class="text-danger fw-bold">✓</i> 25000 sq. ft. Display in</h3>
                    <h3 class="text-light">Delhi & Bengaluru</h3>
                </div>
                <div class="col-7">
                    <!-- <div class="container"> -->
                    <div class="row studiogallery g-1 mb-1 my-5">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="box-card px-3 py-4">
                                <div class="card">
                                    <img src="images/ClassicKitchen.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Classic Kitchen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="box-card px-3 py-4">
                                <div class="card">
                                    <img src="images/ModernKitchen.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">Modern Kitchen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="box-card px-3 py-4">
                                <div class="card">
                                    <img src="images/ItalianFurniture.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Italian Furniture</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row studiogallery g-1">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="box-card px-3 py-4">
                                <div class="card">
                                    <img src="images/ClassicWardrobe.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Classic Wardrobe</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="box-card px-3 py-4">
                                    <div class="card">
                                        <img src="images/ModernKitchen2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Modern Kitchen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="box-card px-3 py-4">
                                    <div class="card">
                                        <img src="images/HomeInteriors.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Home Interiors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->

                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>