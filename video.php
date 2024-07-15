<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            background: #000000;
            color: #ffffff;
            margin: 40px auto 10px;
            padding: 20px 0px;
            max-width: 960px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .embed-responsive-4by3 {
            padding-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner d-flex" role="listbox">
                <div class="item active">

                <div>
                        <div class="embed-responsive embed-responsive-4by3">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe src="https://player.vimeo.com/video/99482883"></iframe>
                        </div>
                    </div>
                    <div class="carousel-caption">
                        aaaaaaaaaaaa
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="embed-responsive embed-responsive-4by3">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe src="https://player.vimeo.com/video/99482883"></iframe>
                        </div>
                    </div>

                    <div>
                        bbbbbbbbbb
                    </div>
                </div>
                fffffffffff
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Carousel Auto-Cycle
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 0
            })



        });
    </script>
</body>

</html>