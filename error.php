<?php
$response_code = http_response_code();

$message = [
  400 => "We couldn't make sense of your request",
  401 => "Unauthorized",
  403 => "Permission Denied",
  404 => "We couldn't find the page you were looking for.",
  500 => "Something inside the box is broken. Try again later."
];
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        color: rgba(0, 0, 0, .87);
        background-color: rgba(0, 0, 0, .06);
      }

      .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: 800px;
        max-width: calc(100% - 40px);

        background-color: white;

        box-shadow: 3px 3px 7px rgba(0, 0, 0, .2);

        text-align: center;
      }

      h1 {
        text-transform: uppercase;
        color: rgba(0, 0, 0, .87);
      }

      p {
        color: rgba(0, 0, 0, .53);
      }
      </style>
  </head>
  <body>
    <div class="text">
      <div style="padding: 20px">
        <?php
        echo "<h1>Error $response_code</h1>";
        ?>
        <?php

        $msg = $message[$response_code] ?? "That's not good";
        if($msg) {
          echo "<p>$msg</p>";
        }

        ?>
      </div>
    </div>
  </body>
</html>
