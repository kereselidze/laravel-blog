<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erekle Kereselidze - ერეკლე კერესელიძე</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="https://use.fontawesome.com/20aa2c3e8b.js"></script>
</head>

<body>
<div class="terminal">
    <span class="dollar"></span> Hi all, I'm Erekle Kereselidze
    <br/>
    <span class="dollar"></span> A Full-Stack Web developer
    <br/>
    <span class="dollar"></span> To see my skills, plz, visit my <a
            href="https://www.linkedin.com/in/erekle-kereselidze/" target="_blank">LinkedIn Profile</a>
    <br/>
    <span class="dollar"></span> You can contact me via phone (+995) 595 36 50 20
    <br/>
    <span class="dollar"></span> Or via email erekle@kereslidze.ge
    <br/>
    <span class="dollar"></span> <a href="https://www.linkedin.com/in/erekle-kereselidze/" target="_blank"> <i
                class="fa fa-linkedin-square"></i> </a>
    <a href="https://github.com/erekle1" target="_blank"> <i class="fa fa-git-square"></i></a>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<script>
    // Typewriter.js
    // https://github.com/ronv/Typewriter.js

    $.fn.typewriter = function () {
        this.each(function () {
            var c = $(this),
                b = c.html(),
                a = 0,
                d = 0;
            c.html("");
            var e = function () {
                if ("<" == b.substring(a, a + 1)) {
                    var f = new RegExp(/<span class="instant"/),
                        g = new RegExp(/<span class="clear"/);
                    if (b.substring(a, b.length).match(f)) a += b.substring(a, b.length).indexOf("</span>") + 7;
                    else if (b.substring(a, b.length).match(g)) d = a, a += b.substring(a, b.length).indexOf("</span>") + 7;
                    else
                        for (;
                            ">" != b.substring(a, a + 1);) a++
                }
                c.html(b.substring(d, a++) + (a & 1 ? "_" : ""));
                a >= b.length || setTimeout(e, 70 + 100 *
                    Math.random())
            };
            e()
        });
        return this
    };
    $(".terminal").typewriter();
</script>
</body>
</html>