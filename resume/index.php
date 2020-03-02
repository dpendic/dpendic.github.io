<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
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

    <title>Devon Endicott | Resume</title>

    <style>
      :focus { outline: 0; }

      html {
        font-family: 'Open Sans', sans-serif;
        background-repeat: no-repeat;
        background-attachment: fixed;

        /* background-position: 30% 50%; */

        background-size: cover;
        text-transform: uppercase;

        transition: background-image 400ms ease-in-out;

        margin: 0;
        padding: 0;
      }

      body {
        margin: 0;
        padding: 0;
      }

      .header-jpl {
        border-bottom: 5px solid #E60E0E;
      }

      .header-skills {
        /* border-bottom: 5px solid #a6defe; */
        border-bottom: 5px solid #74ACCC;
      }

      .header-glass {
        border-bottom: 5px solid #2ecc71;
      }

      .header-jpl:focus {

      }

      .transparent_btn {
        display: inline-block;
        margin: 5px;
        padding: 6px 14px;
        border: 2px solid #000;
        text-decoration: none;
        font-size: 12pt;
        line-height: 120%;

        color: rgba(0, 0, 0, 0.87);

        background-color: transparent;

        -webkit-transition: background-color 200ms ease,
                    color 200ms ease;
        -moz-transition: background-color 200ms ease,
                    color 200ms ease;
        transition: background-color 200ms ease,
                    color 200ms ease;
        cursor: pointer;

        text-transform: uppercase;
        font-weight: bold;
      }

      .transparent_btn:hover {
      	background-color: #000;
        font-weight: bold;
        color: #fff;
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

      .portfolio-section {
        width: 800px;
        max-width: calc(100% - 2em);
        margin: 0 auto;
        padding: 0;
      }

      .portfolio-text-header {
        color: rgba(0, 0, 0.73);
        padding-top: 1em;
        padding-bottom: 0;
      }

      .portfolio-text-header p {
        margin: 0;
        color: rgba(0, 0, 0, 0.53);
      }

      .parallax-window {
        /* margin-bottom: 2em; */
        position: relative;
      }

      .parallax-window-text {
        display: inline-block;
        position: absolute;
        bottom: -1px;
        right: 0;

        padding: 0.5em;
        border-top-left-radius: 4px;

        font-size: 0.8em;
        font-weight: bold;

        background-color: rgba(255, 255, 255, 0.2);
        color: #000;

        transition: background 200ms ease-in;
      }

      .parallax-window:hover > .parallax-window-text {
        background-color: rgba(255, 255, 255, 0.6);
      }

      @media only screen and (max-width: 600px) {
        .parallax-window-text {
          opacity: 1;
          left: 0;
          border-radius: 0;
          text-align: center;
          bottom: 0px;
          background-color: rgba(255, 255, 255, 0.6);
        }
      }

      .parallax-window {
          min-height: 400px;
          background: transparent;
          background-size: cover;
      }

      .portfolio-title::after {
        content: "Devon Endicott \2014  Resume"
      }

      main {
        font-size: 1.2em;
      }

      @media only screen and (max-width: 600px) {
        .portfolio-title {
          max-width: 50%;
        }

        .portfolio-title::after {
          content: "Resume"
        }

        main {
          font-size: 1em;
        }
      }

    </style>

    <script src="/jquery-3.3.1.min.js"></script>
  </head>

  <body>
    <div style="width: 800px; max-width: calc(100% - 2em); margin: 0 auto; margin-top: 10px; vertical-align: middle;">
      <a class="transparent_btn" href="/" style="float: right">Home</a>
      <h2 class="portfolio-title" style="display: inline-block; margin-top: 12px"></h2>
    </div>
    <main class="wrapper" style="text-align: center">
      <div class="portfolio-section" style="height: 800px; background-color: #eee; padding: 10px; border-radius: 2px;">
        <a class="transparent_btn" href="download.php" style="margin-bottom: 15px;">Download as PDF</a>
        <object data="resume.pdf" style="width: 100%; height: 100%;"></object>
      </div>
    </main>
  </body>
</html>
