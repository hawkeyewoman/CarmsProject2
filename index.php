<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Personal Page</title>
    <?php require_once("lib/headUtils.php");?>
    <link rel="stylesheet" href="lib/css/animate.css">
    <link rel="stylesheet" href="lib/css/box.css"/>

    <style>
      body{
        background: url("lib/images/road.jpg")no-repeat center center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
  <?php require_once("lib/partials/navbar.php");?>
    <section>
      <div class="class-md-12">
        <div class="animated fadeIn">
          <h1>Stepping Forward</h1>
        </div>
      </div>
      <div id="photo">
        <div class="col-md-12">
          <div class="row col-centered">
              <img src="lib/images/reflect.png" class="img-responsive center-block clearfix" alt="" />
          </div>
        </div>
      </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <p class="lead">
          "If you accept the expectations of others, especially
          negative ones, then you never will change the outcome."
        </p>
        <p class="lead">
          Michael Jordan
        </p>
      </div>
    </div>
  </section>

  <section>
    <?php require_once ("lib/partials/box.php");?>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <p class="lead">
          Welcome, to my page!
        </p>
        <p class="lead">
          Stepping forward in life is sometimes a difficult move to make but with baby steps
          you can reach the destination.
        </p>
        <p class="lead">
          A few weeks ago I took a step forward in taking a new direction in life.  Learning web
          design in seven weeks.  These few weeks have been a challenge and caused dreams about codes.  Within these
          seven weeks I am proud to say "I have learned something new and plan to make use of what
          I have been taught".
        </p>
      </div>
    </div>
  </section>


  </body>
</html>
