<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>about page</title>
    <?php require_once("lib/headUtils.php"); ?>
    <link rel="stylesheet" type="text/css" href="lib/css/slicebox.css"/>
 		<link rel="stylesheet" type="text/css" href="lib/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="lib/css/card.css"/>
    <style>
      body{
        background: url("lib/images/bridge.jpg")no-repeat center center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
    <?php require_once ("lib/partials/navbar.php");?>

    <section id="slicebox">
      <?php require_once ("lib/partials/slicebox.php");?>
    </section>

    <section class="info">
      <div class="row">
        <div class="col-md-6">
          <h3 class="title">Childhood</h3>
            <p>
            I grew up in the Four Corners area with my parents.  My parents were a huge influence in my life,
            they taught me how to love, respect, care, and never to give up.  Life isn't easy and times we
            feel like wanting to throw in the towel and call it quits but we remember the struggle our parents,
            grandparents and those before us have endured.  I heard stories of how my grandparents never went
            to school or how they never learned the English language but yet they learned many other trades
            of life.  Today, we still have those trades to look back upon.  Weaving for instance is one skill
            that my grandmother, Bessie had taught me.  I remember spooling the wool to make yarn and her
            gathering flowers to make the dye.  Sitting beside her as a child learning to weave was an honor
            and do wished I had more time to perfect the art.  My grandmother was killed in an accident with a
            drunk driver.  Sadly, I never tried to weave again.
            </p>
        </div>

        <div class="col-md-6 beginning">
          <img src="lib/images/beginning.jpg" class="img-responsive center-block" style="height: 200px; width: 200px;"/>
          <h3 class="title">Beginning</h3>
        </div>
    </div>
    </section>

  <?php require_once ('lib/partials/imageEffect.php');?>

  <div class="row">
    <div class="col-md-12">
      <br>
      <br>
        <p>
          As a child, I never knew what a cellphone was or the internet because they were not introduced
          to the world yet.  My childhood consist of playing in the hills behind our home and gardening
          with my parents.  Today, my three year old knows how to operate my cellphone and makes you
          realize how much the times have changed.  Technology is advancing everyday and with everyday we
          are learning something new.
        </p>
        <br>
        <p>
          I never truly understood the process behind a website until recently.
          The training I received in class was insightful and taught me how to construct
          this site.  The first two weeks were full of codes and it even came to the point of dreaming
          about them at night.  I am happy to say I have learned a lot and was able to construct
          this site. There are still a lot to learn and I am looking forward
          to building another site in the near future.
        </p>
    </div>
  </div>

    <?php require_once ("lib/partials/scripts.php");?>

    <script type="text/javascript" src="lib/js/jquery.slicebox.js"></script>
    <script type="text/javascript">
      $(function() {
        var Page = (function() {
          var $navArrows = $( '#nav-arrows' ).hide(),
            $navDots = $( '#nav-dots' ).hide(),
            $nav = $navDots.children( 'span' ),
            $shadow = $( '#shadow' ).hide(),
            slicebox = $( '#sb-slider' ).slicebox( {
              onReady : function() {
                $navArrows.show();
                $navDots.show();
                $shadow.show();
              },
              onBeforeChange : function( pos ) {
                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );
              }
            } ),

            init = function() {
              initEvents();
            },
            initEvents = function() {
              // add navigation events
              $navArrows.children( ':first' ).on( 'click', function() {
                slicebox.next();
                return false;
              } );

              $navArrows.children( ':last' ).on( 'click', function() {
                slicebox.previous();
                return false;
              } );

              $nav.each( function( i ) {
                $( this ).on( 'click', function( event ) {
                  var $dot = $( this );
                  if( !slicebox.isActive() ) {
                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  }

                  slicebox.jump( i + 1 );
                  return false;
                } );
              } );
            };

            return { init : init };
        })();

        Page.init();
      });
    </script>

    <section>
      <script type="text/javascript" src="lib/js/card.js"></script>
      <?php require_once ("lib/partials/card.php");?>
    </section>

    <div class="col-md-12">
      <footer><div class="container">
          <p class="pull-left"><a href="about.php">Back to Top</a></p>
          <p class="pull-left"><a href="index.php">Home</a></p>
          <p class="pull-left"><a href="contact.php">Contact</a></p>
          <p>
            Caramelita Rafael &copy; 2016
          </p>
          </div>
        </footer>
      </div>

  </body>
</html>
