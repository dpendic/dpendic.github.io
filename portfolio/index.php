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

    <title>Devon Endicott | Portfolio</title>

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

      .portfolio-text-content {
        color: rgba(0, 0, 0.73);
        text-align: justify;
        text-transform: initial;
        font-size: 0.9em;
        padding: 1em 0;
      }

      .portfolio-section a {
        color: #E60E0E;
        text-decoration: none;
        text-transform: uppercase;

        transition: color 100ms ease-in-out,
                    border 300ms linear;

        border-bottom: 1px solid #E60E0E00;
      }

      .portfolio-section a:hover {
        color: rgba(0, 0, 0, 0.53);
        border-bottom: 3px solid rgba(0, 0, 0, 0.53);
      }

      .portfolio-section-education a {
        color: #74ACCC;
        border-bottom: 1px solid #4C84A400;
      }

      .portfolio-section-glass a {
        color: #2ecc71;
        border-bottom: 1px solid #2ecc7100;
      }

      .portfolio-text-links {
        text-align: right;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .portfolio-text-links li {
        margin: 0;
        line-height: 2em;
      }

      .portfolio-text-links li::after {
        content: "\000BB";
        font-weight: bold;
        font-size: 1.2em;
      }

      .parallax-window {
          min-height: 400px;
          background: transparent;
          background-size: cover;
      }

      .portfolio-title::after {
        content: "Devon Endicott \2014  Portfolio"
      }

      main {
        font-size: 1.2em;
        opacity: 0;
      }

      @media only screen and (max-width: 600px) {
        .portfolio-title {
          max-width: 50%;
        }

        .portfolio-title::after {
          content: "Portfolio"
        }

        main {
          font-size: 1em;
        }
      }

      .portfolio-skills {
        width: 800px;
        max-width: calc(100% - 2em);
        margin: 0 auto;
        padding: 0;

        font-size: 0.8em;

        display: flex;
        flex-wrap: wrap;
      }

      .portfolio-skill {
        background-color: rgba(166, 222, 254, 0.5);
        border-left: 4px solid rgba(166, 222, 254, 0.9);
        padding: 0.9em;
        margin: 0.3em;

        transition: background-color 300ms ease-in-out,
                    border-left 300ms ease-in-out;

        flex-basis: calc(50% - 2.4em - 4px);
        flex-grow: 0;

        position: relative;
      }

      @media only screen and (max-width: 600px) {
        .portfolio-skill {
          flex-basis: calc(100% - 2.4em - 4px);
        }
      }

      .portfolio-skill:hover {
        background-color: rgba(166, 222, 254, 0.7);
        border-left: 4px solid rgba(166, 222, 254, 1);
        cursor: default;
      }

      .portfolio-skill > span {
        font-weight: bold;
      }

      .portfolio-skill > p {
        margin: 0;
        margin-top: .3em;
        padding: 0;
        text-transform: initial;
        font-size: 0.9em;
      }

      .portfolio-skill a {
        color: #000;
        font-weight: bold;
      }

      .portfolio-skill-ref {
        margin-top: 1em;
        font-weight: bold;
        text-align: right;
        font-size: 0.8em;

        position: absolute;
        bottom: 1em;
        right: 1em;
      }

      .portfolio-skill-ref > a {
        margin-right: .4em;
      }

      .portfolio-skill-ref::after {
        content: "\000BB";
        font-weight: bold;
        font-size: 1.2em;
      }

      .portfolio-text-quote {
        margin: 1.5em;
        color: rgba(0, 0, 0, 0.65);
        border-left: 3px solid rgba(0, 0, 0, 0.4);
        padding: 0.5em;
        margin-left: calc(1.5em + 2px);
        font-size: 0.8em;

        transition: color 200ms ease-in-out,
                    border 200ms ease-in-out,
                    margin 200ms ease-in-out,
                    background-color 200ms ease-in-out;

        cursor: default;
        line-height: 1.4em;
        user-select: none;
      }

      .portfolio-text-quote:hover {
        margin-left: 1.5em;
        color: rgba(0, 0, 0, 0.92);
        border-left: 5px solid #E60E0E;
        background-color: rgba(0, 0, 0, 0.05);
      }

      .portfolio-nav {
         width: 800px;
         max-width: calc(100% - 2em);
         margin: 0 auto;
         display: flex;
         flex-direction: row;
         flex-wrap: wrap;
      }

      .portfolio-nav a {
        flex: 1 1 0;
        text-align: center;
        padding: 1em 2em;
        min-width: calc(32% - 4em - 10px);

        display: inline-block;
        margin: 5px;
        border: 2px solid #000;
        text-decoration: none;
        font-size: 1em;
        line-height: 120%;

        color: rgba(0, 0, 0, 0.87);

        /* background-color: transparent; */

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

      @media only screen and (max-width: 600px) {
        .portfolio-nav a {
          min-width: calc(100% - 4em - 10px)
        }
      }


      .portfolio-nav-education {
        color: #74ACCC;
        border: 2px solid #74ACCC;
        background-color: #A6DEF2aa;
      }

      .portfolio-nav-jpl {
        color: #E60E0E;
        border: 2px solid #E60E0E;
        background-color: #E60E0Eaa;
      }

      .portfolio-nav-blglass {
        color: #2ecc71;
        border: 2px solid #2ecc71;
        background-color: #2ecc71aa;
      }

      .portfolio-nav a:hover {
        color: #fff;
        background-color: #000;
      }

      .animate-reveal {
        opacity: 0;
        -webkit-animation: reveal 1.2s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
           -moz-animation: reveal 1.2s ease-in 1 normal forwards;
             -o-animation: reveal 1.2s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
                animation: reveal 1.2s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
        -webkit-animation-delay: 0;
           -moz-animation-delay: 0;
             -o-animation-delay: 0;
                animation-delay: 0;
      }

      @-webkit-keyframes reveal {
        0% {
          opacity: 0;
          -webkit-transform: translateY(5%);
             -moz-transform: translateY(5%);
               -o-transform: translateY(5%);
                  transform: translateY(5%);
        }

        100% {
          opacity: 1;
          -webkit-transform: translateY(0);
             -moz-transform: translateY(0);
               -o-transform: translateY(0);
                  transform: translateY(0);
        }
      }

      @-moz-keyframes reveal {
        0% {
          opacity: 0;
          -webkit-transform: translateY(5%);
             -moz-transform: translateY(5%);
               -o-transform: translateY(5%);
                  transform: translateY(5%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0);
             -moz-transform: translateY(0);
               -o-transform: translateY(0);
                  transform: translateY(0);
        }
      }

      @-o-keyframes reveal {
        0% {
          opacity: 0;
          -webkit-transform: translateY(5%);
             -moz-transform: translateY(5%);
               -o-transform: translateY(5%);
                  transform: translateY(5%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0);
             -moz-transform: translateY(0);
               -o-transform: translateY(0);
                  transform: translateY(0);
        }
      }

      @keyframes reveal {
        0% {
          opacity: 0;
          -webkit-transform: translateY(5%);
             -moz-transform: translateY(5%);
               -o-transform: translateY(5%);
                  transform: translateY(5%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0);
             -moz-transform: translateY(0);
               -o-transform: translateY(0);
                  transform: translateY(0);
        }
      }

      .parallax-mirror {
        opacity: 0;
      }

    </style>

    <script src="/jquery-3.3.1.min.js"></script>
    <script src="/parallax.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('.animate-reveal').on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {
        jQuery(window).trigger('resize').trigger('scroll');

        $('.parallax-mirror').css('opacity', 0);

        $('.parallax-mirror').animate({
          opacity: 1
        }, 200)
      })

      $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {

        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          window.location.hash = ""
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    });
    </script>
  </head>

  <body>
    <div style="width: 800px; max-width: calc(100% - 2em); margin: 0 auto; margin-top: 10px; vertical-align: middle;">
      <a class="transparent_btn" href="/" style="float: right">Home</a>
      <h2 class="portfolio-title" style="display: inline-block; margin-top: 12px"></h2>
    </div>
    <div class="portfolio-nav">
      <a class="portfolio-nav-education" href="#education">Education</a>
      <a class="portfolio-nav-jpl" href="#jpl">NASA JPL</a>
      <a class="portfolio-nav-blglass" href="#blglass">Blockland Glass</a>
    </div>
    <main class="wrapper animate-reveal">
      <div class="portfolio-section portfolio-section-education">
        <div class="portfolio-text-header" style="padding-bottom: 0;">
          <h1 class="header-skills" id="education">Skills And Education</h1>
            <p>University of Massachusetts &mdash; Amherst</p>
            <p>August 2016 - May 2020</p>
        </div>
        <div class="portfolio-text-content">
          <ul style="font-size: 0.9em; text-align: left;">
            <li><b>Bachelors of Science in Computer Science</b> with a focus in Robotics and Simulation <i>(In Progress)</i></li>
            <li><b>Bachelors of Science in Physics</b> with a concentration in Aerospace/Mechanical Engineering <i>(In Progress)</i></li>
            <li><b>Mathematics Minor</b> <i>(Completed)</i></li>
          </ul>
          <p>Currently enrolled at the University of Massachusetts - Amherst, I am pursuing a double degree in Computer Science and Physics with a minor in Mathematics. I have chosen to specialize my Computer Science track in robotics and simulation, involving advanced algorithm, electronics, and low-level computing courses. I have designed an Aerospace-focused Mechanical Engineering track for my physics degree, including a series of fluid mechanics, chemistry, high-level thermodynamics, and oscillation courses in the Mechanical and Industrial Engineering College. Other physics courses and lab work on within in school of Physics include thermodynamics, quantum mechanics, nuclear and particle physics, graduate-level electronics courses (involving PCB design, largely focused on sensors and AC circuits), and Lagrangian/Hamiltonian mechanics.</p>
        </div>

        <div class="portfolio-text-content">
          <h3 style="border-bottom: 2px solid #74ACCCaa">Programming</h3>
          <p>I began scripting when I was 11 years old in the C-style scripting language "TorqueScript". In the two years that followed, I expanded out in to full web-stack programming (both front-end and API) and Java. When I was 13, I attended a summer C/C++ Robotics program at the Massachusetts Institute of Technology. Around the same time, I began working with Linux (Debian/Ubuntu, mostly) by converting an old desktop in to a home server for web and game hosting. Through middle school, I experimented with several networking-heavy real-time and server/client RESTful projects that never quite came to fruition (primarily predecessors to the <a href="#blglass">Blockland Glass</a> project below) but provided extensive experience with Java and full-stack web development, as well as a wholistic understanding of networking and basic security principles.</p>
          <p>As small DIY projects and IoT gadgets became popular, the idea of a home-made quadcopter captured my attention for several years, however the restrictive budget of a 15 year old was largely prohibitive. I opted to create a simulation engine instead, effectively building a playground to develop flight software, a topic that deeply interests me. I was quickly stumped by the fact that I had never taken a physics course, being a sophomore in high school. However, these exercises and questions kept me engaged throughout my upcoming education and largely drove my course selection and interests. I quickly learned basic circuitry through a series of DIY Raspberry Pi projects.</p>
        </div>
      </div>

      <div class="parallax-window" data-parallax="scroll" data-image-src="/backgrounds/drone.jpg" data-position-x="-490px">
        <div class="parallax-window-text">
          <span>Drone IMU Test Unit</span>
        </div>
      </div>

      <div class="portfolio-section portfolio-section-education">
        <div class="portfolio-text-content">
          <p>When I was 16, I began the Blockland Glass project, a platform to manage and distribute user created content for the video game Blockland. The project gained traction within the Blockland community and served over a million requests within its first year.</p>
          <p>Beginning college (having accrued enough AP credits to start a few credits short of being a Junior), many of my personal computing and physics interests became realized as I began my first formal Computer Science education &mdash; everything up until this point had been self-taught. I began the Glass Hosting project, an extension of the Blockland Glass project.</p>
          <p>In my sophomore year of college, I began working on a home-made drone in my dorm. Short of time due to my intense academic workload, I only managed to create the sensor test unit for my quadcopter, consisting of four IMUs, a Raspberry Pi, and an I<sup>2</sup>C multiplexer.</p>
          <p>Through the summer leading in to my junior year, I spent my summer in Pasadena, California at NASA's Jet Propulsion Laboratory as an intern in robotic simulation.</p>
        </div>

        <div class="portfolio-skills">
          <div class="portfolio-skill">
            <span>Full Stack Web Development</span>
            <p>
              I've been working full stack multi-consumer since I began programming in scripting when I was 11 years old. I continue to operate a database-heavy content management and delivery system with both web and JSON API endpoints. This site itself has been made from scratch with no templates.
            </p>
          </div>
          <div class="portfolio-skill">
            <span>Analytical and Statistical Physics</span>
            <p>
              Through my lab experience with dynamics, electronics, thermodynamics, oscillations, nuclear physics, and quantum mechanics, I have regularly applied my computer science background in numerical analysis and statistics, primarily in Python working with SciPy.
            </p>
          </div>
          <div class="portfolio-skill">
            <span>Server/Systems Administration</span>
            <p style="margin-bottom: 2em">
              An extensive background with Linux systems, including a personal home server and file share, game servers, production content delivery architecture involving AWS S3 file delivery, and automated server deployment and custom management server for multi-user hosting environments.
            </p>
            <div class="portfolio-skill-ref"><a href="#glasshosting">Glass Hosting</a></div>
          </div>
          <div class="portfolio-skill">
            <span>Workflow and Deployment</span>
            <p style="margin-bottom: 2em">
              Led a team distributed around the world on a large-scale project with many symbiotic components. Directed workflow, milestone setting, meeting, design goals, and general communication.
            </p>
            <div class="portfolio-skill-ref"><a href="#blglass">Blockland Glass</a></div>
          </div>
          <div class="portfolio-skill">
            <span>Low-Level Programming</span>
            <p>
              Having written a ground-up 16-bit Operating System in Assembly when I was 16, I have a firm understanding of low level computing.
            </p>
          </div>
          <div class="portfolio-skill">
            <span>Videography and Photography</span>
            <p style="margin-bottom: 2em">
              Now a hobby, I worked as the Technical Producer in my high school's nationally-renouned video production program. I received the Certiport Adobe Premiere Pro CS6 certification in 2016, receiving the highest score to date at my school. I have a firm background in videography from independent practice and formal education, which has transitioned to a hobby of photography.
            </p>
            <div class="portfolio-skill-ref" ><a href="https://certiport.pearsonvue.com/">Certiport</a></div>
          </div>
          <div class="portfolio-skill">
            <span>Distributed Systems</span>
            <p style="margin-bottom: 2em">
              Through the Glass Hosting project, I gained extensive experience working with automated distributed systems and cluster management, writing custom management software to securely manage user content and security keys across multiple systems.
            </p>
            <div class="portfolio-skill-ref"><a href="#glasshosting">Glass Hosting</a></div>
          </div>
        </div>

        <div class="portfolio-text-content">
          <h3 style="border-bottom: 2px solid #74ACCCaa">Relevant Links</h3>
          <ul class="portfolio-text-links">
            <li>
              <a href="https://www.umass.edu/">UMass Amherst</a>
            </li>
            <li>
              <a href="https://www.cics.umass.edu/">College Of Computer Science</a>
            </li>
            <li>
              <a href="https://www.physics.umass.edu/">Physics Department</a>
            </li>
          </ul>
        </div>
      </div>

      <div id="jpl" class="parallax-window" data-parallax="scroll" data-image-src="/backgrounds/4.jpg">
        <div class="parallax-window-text">
          <span>Spaceflight Operations, JPL</span>
        </div>
      </div>

      <div class="portfolio-section">
        <div class="portfolio-text-header">
          <h1 class="header-jpl">NASA Jet Propulsion Laboratory</h1>
          <p>
            May 2018 &mdash; August 2018
          </p>
          <p>
            Intern, Dynamics And Real Time Simulation (DARTS) Lab
          </p>
          </span>
        </div>
      </div>

      <div class="portfolio-section">
        <div class="portfolio-text-content">
          <p>I entered the aerospace industry with a summer internship at NASA's <a href="https://www.jpl.nasa.gov/">Jet Propulsion Laboratory</a> in Pasadena, California in the DARTS Lab. <a href="https://dshell.jpl.nasa.gov/">DARTS (Dynamic and Real Time Simulation) Lab</a> produces a suite of software packages utilized to simulate a wide variety of spacecrafts across serval NASA centers and commercial partners. Simulations ranged from Martian rovers (dating back to Rocky 7, one of Pathfinder R&D vehicles, up to the upcoming Mars2020 rover), launch vehicles such as SLS, Lunar excursions and habitats, EDL of a series of vehicles on a handful of celestial bodies such as Mars and Jovian moons, flight of the upcoming Mars Helicopter riding with Mars2020, hardware-in-the-loop testing, to molecular protein folding. </p>
          <p>Specifically, my work at DARTS Lab in the summer of 2018 was the implementation of the <a href="https://github.com/flexible-collision-library/fcl">Flexible Collision Library</a> (FCL) to act as an alternative to the existing collision detection library. I worked primarily in C++ driven by Python to <span style="color: rgba(0,0,0,0.7); font-weight:bold;">1)</span> implement FCL as a consumer of the existing DARTS framework, and <span style="color: rgba(0,0,0,0.7); font-weight:bold;">2)</span> alter the multi-body collision engine to use a generalized collision engine interface, enabling the use of the new FCL implementation and seamless changing of the two libraries at runtime.</p>
          <p>FCL offers a wide variety of options in implementation, allowing for its' use to be tailored to specific needs. FCL has a solid mathematic and computational background, developed by a team of researchers at UNC Chapel Hill along with large open-source contributions. FCL relies on the implementation to define and tune the collision detection and distance finding algorithms used, enabling very specific and efficient usage. Most important to efficient implementation, FCL relies on implementation-defined broadphase grouping and collision queries. This departure from standard collision engines' black-box approach gives the ability to optimize broadphase groups around their logical implementation &mdash; such as grouping celestial bodies and their satellites together, or a rover with its' instruments, with the design knowledge that these bodies will travel together and are a single unit.</p>
        </div>
      </div>

      <div class="parallax-window" data-parallax="scroll" data-image-src="/backgrounds/3.jpg" data-position-x="-100px">
        <div class="parallax-window-text">
          <span>Curiosity/MSL Replica, JPL</span>
        </div>
      </div>

      <div class="portfolio-section">
        <div>
          <div class="portfolio-text-content">
            <p>After finishing my primary project of implementing FCL earlier than anticipated, three weeks before the end of my ten weeks at JPL, I switched gears to Videography and web development to produce an in-house movie gallery, viewer, and upload system to manage internal simulation renders and presentation recordings.</p>
            <p>My internship at JPL falls under the California Institute of Technology's Student-Faculty Program, which required a series of papers and design documents to be submitted throughout my project. Concluding my internship, I produced a final paper and gave a presentation open to DARTS Lab and SFP staff demonstrating my work and experiences gained from my experience, both of which are cleared for public release and are available on request.</p>
            <h3 style="border-bottom: 2px solid #E60E0Eaa">Final Paper Abstract</h3>
            <div class="portfolio-text-quote" style="font-family: 'Times New Roman'">
              <p style="margin: 0; padding: 0;">
                <b>Utilizing Flexible Collision Library In Multibody And Robotics Simulation</b>
              </p>
              <p style="margin: 0; padding: 0;">
                <span>Devon Endicott, University of Massachusetts - Amherst</span>
              </p>
              <p style="margin: 0; padding: 0;">
                <i>Mentors: Jonathan Cameron and Abhinandan Jain, Jet Propulsion Laboratory, California Institute of Technology</i>
              </p>
              <p>Collision detection in multibody simulation can be a computationally heavy process, leading to a large amount of
              computational and mathematical research in the interest of simplifed or lower-cost algorithms. Due to the specifc
              requirements and math-heavy nature of these methods, collision detection is often handed off to dedicated collision
              detection libraries. Unfortunately, a large number of these libraries are optimized for idealized use-cases, utilizing
              collision detection methods and algorithms ftting what the library authors believe to be the most common case,
              often gaming where precision and accuracy are traded for speed. Flexible Collision Library (FCL), an open-source
              collision library developed by a team of researchers at UNC Chapel Hill, along with various other contributors,
              alleviates this challenge by exposing lower-level options when conducting collision detection. FCL allows for a wide
              range of customization, such as collision bounding body techniques and structures, broad-phase collision group
              defnition and optimization algorithms, and defnable precision and tolerances. Utilizing these options allow FCL's
              collision checking to be tailored to specifc applications, increasing performance and returning desirable precision.
              FCL offers signifcant performance increases over similar libraries as shown in the 2012 paper FCL: A General
              Purpose Library for Collision and Proximity Queries. Although still in development, FCL's reduced cost and higher
              precision already shows promise after being implemented in to the Dynamics and Real Time Simulation (DARTS)
              Lab’s multibody contact dynamics software.</p>
            </div>
            <h3 style="border-bottom: 2px solid #E60E0Eaa">Relevant Links</h3>
            <ul class="portfolio-text-links">
              <li>
                <a href="https://www.jpl.nasa.gov/">NASA Jet Propulsion Laboratory</a>
              </li>
              <li>
                <a href="http://sfp.caltech.edu/">CalTech Student-Faculty Program</a>
              </li>
              <li>
                <a href="https://www-robotics.jpl.nasa.gov/facilities/facility.cfm?Facility=7">DARTS Lab</a>
              </li>
              <li>
                <a href="https://github.com/flexible-collision-library/fcl">Flexible Collision Library (Github)</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="blglass" class="parallax-window" data-parallax="scroll" data-image-src="https://blocklandglass.com/img/home/IcePalace.jpg">
        <div class="parallax-window-text">
          <span>Blockland Stock Image</span>
        </div>
      </div>

      <div class="portfolio-section portfolio-section-glass">
        <div class="portfolio-text-header">
          <h1 class="header-glass">Blockland Glass</h1>
          <p>
            May 2015 &mdash; Current
          </p>
          <p>
            Project Lead and Primary Developer
          </p>
          </span>
        </div>
        <div class="portfolio-text-content">
          <p>Blockland Glass is a content management and social platform for the game <a href="http://blockland.us">Blockland</a>. Blockland is a 2008 block-based multiplayer sandbox game that offers very easy modification and is designed around user created content, from coded and 3D-modelled game assets to in-game creations and scratch-like scripting. Blockland is built on GarageGame's Torque Game Engine (TGE), which offers a C-like scripting language called TorqueScript. The easy and constructive community surround Blockland has created a very vibrant and richly populated community of content creators.</p>
          <p>Blockland Glass provides a file hosting, distribution, and installation system to enable content creators to share and manage their creations. The content-focused part of the service, dubbed the "Mod Manager", has two components; a website to view and manage content, focused toward content creators, and an in-engine mod manager to install and manage a user's content.</p>
          <p>I started the Blockland Glass project when I was in my junior year of high school. With no formal programming education or courses and only my 5 years of prior self-education, I created and ran the service myself, involving server administration, PHP/MySQL/JavaScript web programming with an open JSON API, integrated Amazon Web Services S3 CDN, and an entire in-engine client. Within the first year, the API had served over 1 million requests.</p>
          <p>As the service grew, development shifted to a more social focus. The service grew to include "Glass Live", a full user-to-user chat and friends list service. To serve real-time requests, the server grew to include a Node.js component, interfacing with both the pre-existing website's API and a MongoDb database.</p>
          <p>By this point, other developers began to join the project. I shifted in to a management position, working with others across multiple timezones and backgrounds to direct development, set goals, and lead general coordiation as well as moderation of the service.</p>
          <p>Blockland Glass is now a standard amongst the Blockland community, having over 15,000 users with more than 415,000 downloads served in its' three year lifespan thus far.
        </div>
        <div class="portfolio-text-header">
          <h3 style="border-bottom: 2px solid #2ecc71AA" id="glasshosting">Glass Hosting</h3>
          <p>August 2016 &mdash; September 2018 </p>
        </div>
        <div class="portfolio-text-content">

          <p>Independent from the open-source side of the project, I began an independent venture to provide a paid server hosting service for Blockland. The service provided a live-updating web panel (driven by jQuery and socket.io) to provide full control over client's servers. The web panel in turn communicated directly with a custom wrapper for each Blockland process. To minimize overhead, the service was designed to run on a series of Linode Virtual Machines - two Blockland servers per VM - which were automatically deployed based on need. Because of image size limits imposed by Linode, this included package installation, subdomain registration, installation of the server and user management software developed for the service, creation of users, and SSH key exchange.</p>
          <p>The service included a handful of separate components, all personally developed and maintained:</p>
          <ul>
            <li>PHP-backended website to handle payment, server management, node deployment</li>
            <li>Javascript-heavy user control panel, providing real-time server control</li>
            <li>Node.js 'master' server for real time node control and status</li>
            <li>Node.js 'node' software running on each Virtual Machine to configure new installations and carry out privileged operations</li>
            <li>Node.js 'wrapper' software to run under each user account, interacting with the server executable and capturing stdout/stderr</li>
          </ul>
          <p>The service pulled together a number of external APIs and services, include Linode, Stripe, CloudFlare, LetsEncrypt, Twilio, and AWS S3. One of my primary design focuses was full automation, given that the service was developed in my dorm room under heavy class load with limited free time.</p>
          <p>Glass Hosting has since closed down in September 2018 due to a continuing lack of personal time and a lack of clients due to a dwindling playerbase of Blockland.</p>

          <h3 style="border-bottom: 2px solid #2ecc71AA">Relevant Links</h3>
          <ul class="portfolio-text-links">
            <li>
              <a href="https://blocklandglass.com/">BlocklandGlass.com</a>
            </li>
            <li>
              <a href="https://github.com/BlocklandGlass">Blockland Glass (GitHub)</a>
            </li>
          </ul>
        </div>
      </div>
    </main>
  </body>
</html>
