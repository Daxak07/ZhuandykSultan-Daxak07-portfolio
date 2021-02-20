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
    <div class="contact-head wow zoomIn" id="contact">
        <h1>CONTACT</h1>
    </div>
    <div class="container wow zoomIn" style="animation-delay: 300ms" id="contact">
        <form action="">
            <div class="form-field">
                <label for="fullname">Fullname</label>
                <input type="text" class="fullname" name="fullname" placeholder="fullname" autofocus>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" class="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-field">
                <label for="message">Message</label>
                <textarea type="message" class="message" name="message" placeholder="Message like..." required rows="4"></textarea>
            </div>
            <div class="form-field btn">
                <input type="submit" name="submit" class="submit" value="Send" />
            </div>
        </form>
    </div>
</body>
<script src="/js/app.js"></script>

</html>
