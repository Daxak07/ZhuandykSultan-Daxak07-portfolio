<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <title>Portfolio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header class="wow zoomIn" id="home">
        <div class="logo">
            <h1>DAXAK</h1>
        </div>
        <nav class="navigation">
            <ul>
                <li><a data-scroll="#home1" onclick="window.location='{{ url('/')}}'">Home</a></li>
                <li><a data-scroll="#about" onclick="window.location='{{ url('about')}}'">About</a></li>
                <li><a onclick="window.location='{{ url('about')}}'">Skills</a></li>
                <li><a data-scroll="#contact" onclick="window.location='{{ url('contact')}}'">Contact</a></li>
            </ul>
        </nav>
        <div class="burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </header>

    <div class="main-header" id="home1">
        <div class="header-content wow zoomIn" style="animation-delay: 600ms">
            <h1 class="header-main-content-h1">
                HEY,<br>
                I'm <span>Daxak</span><br>
                Web Developer
            </h1>
            <button class="cta" data-scroll="#contact" onclick="window.location='{{ url('contact')}}'">Email me</button>
        </div>

        <div class="header-main-img wow zoomIn" style="animation-delay: 900ms">
            <img src="https://freepngimg.com/thumb/web_design/31748-9-coder-transparent.png" alt="" width="80%">
        </div>
    </div>
</body>
    <script src="/js/app.js"></script>
</html>
