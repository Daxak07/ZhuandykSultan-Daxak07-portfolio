<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
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
                <li><a data-scroll="#skills" >Skills</a></li>
                <li><a data-scroll="#contact" onclick="window.location='{{ url('contact')}}'">Contact</a></li>
            </ul>
        </nav>
        <div class="burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </header>
        <div class="about-section" style="margin-top: 0" id="about">
        <div class="about-head">
            <h1 class="wow zoomIn">
                ABOUT
            </h1>
        </div>
        <div class="about">
            <div class="wow zoomIn" style="animation-delay: 300ms">
                <img src="/img/2.jpg" alt="" height="500px">
            </div>
            <div class="wow zoomIn" style="animation-delay: 600ms">
                <h1>I'm Daxak</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere laboriosam vel ipsam natus quia ad, vero culpa asperiores nulla itaque earum veritatis nam quaerat, recusandae harum qui illo nisi, numquam.
                </p>
            </div>
        </div>
    </div>

    <div class="skills" id="skills">
        <div class="max-width">
            <h1 class="wow zoomIn">My skills</h1>
            <div class="skills-content">
                <div class="column left">
                    <div class="text" style="text-align: center"> My skills & experiences.</div>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p> </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info"> <span>HTML</span> <span>90%</span> </div>
                        <div class="line html"> </div>
                    </div>
                    <div class="bars">
                        <div class="info"> <span>CSS</span> <span>60%</span> </div>
                        <div class="line css"> </div>
                    </div>
                    <div class="bars">
                        <div class="info"> <span>JavaScript</span> <span>80%</span> </div>
                        <div class="line js"> </div>
                    </div>
                    <div class="bars">
                        <div class="info"> <span>PHP</span> <span>50%</span> </div>
                        <div class="line php"> </div>
                    </div>
                    <div class="bars">
                        <div class="info"> <span>MySQL</span> <span>70%</span> </div>
                        <div class="line mysql"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script src="/js/app.js"></script>
</html>
