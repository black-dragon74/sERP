<!doctype html>
<html>
<head>
    <title>Page Not Found - {{ env('APP_NAME') }}</title>
    <style>
        html,
        body {
            height: 100%;
            background: linear-gradient(0, #202239, #8595AC);
        }

        ::selection {
            background: #CDD4DE;
        }

        /*--------------------
        Page
        --------------------*/
        .page {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            z-index: 1;
            font-family: Roboto, sans-serif;
            background: #0D0C1E;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /*--------------------
        Content
        --------------------*/
        .content {
            text-align: center;
            padding-top: 118px;
            color: #CDD4DE;
        }
        .content h1 {
            font-weight: 900;
            font-size: 165px;
            line-height: 1;
            margin-bottom: -10px;
            opacity: 0.6;
        }
        .content h2 {
            font-weight: 700;
            font-size: 34px;
            margin-bottom: 6px;
            opacity: 0.9;
        }
        .content p {
            font-weight: 300;
            font-size: 14px;
            opacity: 0.7;
            margin-bottom: 140px;
        }
        .content a {
            display: inline-block;
            font-weight: 300;
            font-size: 12px;
            text-transform: uppercase;
            border: 1px solid #CDD4DE;
            padding: 8px 14px;
            border-radius: 4px;
            opacity: 0.4;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .content a:hover {
            opacity: 1;
        }

        /*--------------------
        Image
        --------------------*/
        img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transform: scale(1.1);
        }

    </style>
</head>
<body>
<div class="page">
    <div class="content">
        <h1>404</h1>
        <h2>Page not found</h2>
        <p>I tried to catch some fog, but I mist.</p>
        <a id="back-to-home">Go Back</a>
    </div>
    <img src="{{ asset('images/background/mist.jpg') }}" />
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script>
    var lFollowX = 0,
        lFollowY = 0,
        x = 0,
        y = 0,
        friction = 1 / 30;

    function animate() {
        x += (lFollowX - x) * friction;
        y += (lFollowY - y) * friction;

        translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

        $('img').css({
            '-webit-transform': translate,
            '-moz-transform': translate,
            'transform': translate
        });

        window.requestAnimationFrame(animate);
    }

    $(window).on('mousemove click', function(e) {

        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
        lFollowX = (20 * lMouseX) / 100;
        lFollowY = (10 * lMouseY) / 100;

    });

    animate();

    $('#back-to-home').on('click', function () {
       history.back();
    });
</script>
</body>
</html>