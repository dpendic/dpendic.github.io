<!doctype html>
<html>
  <head>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>

    <title>Devon Endicott</title>

    <style>
      html {
        font-family: 'Open Sans', sans-serif;
        background-image: url('./backgrounds/1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;

        /* background-position: 30% 50%; */

        background-size: cover;
        text-transform: uppercase;

        transition: background-image 400ms ease-in-out;
      }

      .home {
        background-color: rgba(0, 0, 0, 0.5);

        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;

        height: 100%;
        widht: 100%;
      }

      @media only screen and (min-width: 600px) {
        .home {
          box-shadow: 0 0 300px rgba(0,0,0,0.9) inset;
        }
      }

      .home-center {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        transform: translate(-50%, -50%);

        text-align: center;
      }

      .transparent_btn {
        display: inline-block;
        padding: 10px 18px;
        border: 2px solid #FFF;
        text-decoration: none;
        font-size: 16pt;
        line-height: 120%;

        color: #FFF;
        background-color: rgba(255,255,255, 0);

        -webkit-transition: background-color 200ms ease,
                    color 200ms ease;
        -moz-transition: background-color 200ms ease,
                    color 200ms ease;
        transition: background-color 200ms ease,
                    color 200ms ease;
        cursor: pointer;

        text-transform: uppercase;
      }

      .transparent_btn:hover {
      	background-color: white;

        color: rgba(0, 0, 0, 0.87);
      }

      .solid_btn {
        color: rgba(0, 0, 0, 0.87);
        background-color: white;

        display: inline-block;
        padding: 10px 18px;
        border: 2px solid #FFF;
        text-decoration: none;
        font-size: 16pt;
        line-height: 120%;

        -webkit-transition: background-color 300ms ease,
                    color 200ms ease;
        -moz-transition: background-color 300ms ease,
                    color 200ms ease;
        transition: background-color 300ms ease,
                    color 200ms ease;
        cursor: pointer;

        text-transform: uppercase;
      }

      .solid_btn:hover {
        background-color: rgba(255,255,255, 0);
        color: #FFF;
      }

      .name {
        font-size: 48pt;
        font-weight: bold;

        color: transparent;
        -webkit-text-stroke-width: 1.5px;
        -webkit-text-stroke-color: white;
      }

      .image_btn {
        margin: 10px;
        opacity: 0.7;
        transition: opacity 200ms ease;
      }

      .image_btn:hover {
        opacity: 1;
      }

      .image_btn:active {
        opacity: 1;
      }

      .image_btn > img {
        -webkit-filter: drop-shadow(3px 4px 5px #222);
        filter: drop-shadow(3px 4px 5px #222);
      }

      .block-border {
        width: 500px;
        max-width: calc(100% - 50px);
        height: 3px;
        background-color: rgba(255, 255, 255, 0.38);
        margin: 15px auto;
      }

      .btn-container {
        display: inline-block;
        padding: 0;
        margin: 0;
      }

    </style>

    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">

    $.fn.preload = function() {
      this.each(function(){
          $('<img/>')[0].src = this;
      });
    }


    $(document).ready(function() {

      var background_timeout = false;

      function setBackground(id, lag) {
        if(background_timeout !== false) {
          clearTimeout(background_timeout);
          background_timeout = false;
        }

        var background_timeout = setTimeout(function() {
          var bg =  "url(./backgrounds/" + id + ".jpg)"
          $('html').css('background-image', bg)
        }, 200)
      }

      $('.resume-btn').on('mouseover', function() {

        // var txt =  "url(./backgrounds/" + (3) + ".jpg)"
        // $('html').css('background-image', txt)
        setBackground(3);
      })

      $('.portfolio-btn').on('mouseover', function() {

        // var txt =  "url(./backgrounds/" + (3) + ".jpg)"
        // $('html').css('background-image', txt)
        setBackground('drone');
      })

      $('.photos-btn').on('mouseover', function() {

        // var txt =  "url(./backgrounds/" + (2) + ".jpg)"
        // $('html').css('background-image', txt)

        setBackground(2);
      })


      $('.transparent_btn').on('mouseleave', function() {

        // var txt =  "url(./backgrounds/" + (1) + ".jpg)"
        // $('html').css('background-image', txt)

        setBackground(1);
      })
    //
    //   var bgs = 3;
    //   var bg_id = 0;
    //
    //   setInterval(function() {
    //     bg_id = (bg_id+1) % (bgs);
    //     var txt =  "url(./backgrounds/" + (bg_id+1) + ".jpg)"
    //     $('html').css('background-image', txt)
    //     console.log(txt)
    //   }, 5000)
    //
    //   var images = Array(bgs).fill().map((_, i) => 'backgrounds/' + (i+1) + '.jpg')
    //   $(images).preload();
    //
    });

    </script>
  </head>

  <body>
    <div class="home">
      <div class="home-center">
        <div class="home-text">
          <span class="name">Devon Endicott</span>
          <div class="block-border"></div>
          <div>
            <div class="btn-container resume-btn">
              <a class="transparent_btn" style="width: 140px; margin: 10px" href="/resume/">Resume</a>
            </div>
            <div class="btn-container portfolio-btn">
              <a class="transparent_btn" style="width: 140px; margin: 10px" href="/portfolio/">Portfolio</a>
            </div>
            <div class="btn-container photos-btn">
              <a class="transparent_btn" style="width: 140px; margin: 10px" href="/photos/">Photos</a>
            </div>
          </div>
          <div class="block-border"></div>
          <div style="margin-top: 10px">
            <a class="image_btn" href="https://github.com/dpendic/"><img src="github.png" /></a>
            <a class="image_btn" href="https://www.linkedin.com/in/devon-endicott-9704a6125/"><img src="linkedin.png" /></a>
          </div>
        </div>
      </div>
    </div>
  </body>
  <img src="/backgrounds/1.jpg" style="display: none" />
  <img src="/backgrounds/2.jpg" style="display: none" />
  <img src="/backgrounds/3.jpg" style="display: none" />
</html>
