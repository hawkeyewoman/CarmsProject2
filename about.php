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
          <h3 class="title">Caramelita</h3>
          <p>
            A little info about myself.  My clan is Kinyaa'áanii ( The Towering House) born into the Tábąąhá (Water's Edge clan).
            My maternal grandparents are Keha'atiinii (The Foot Trails people) and my paternal grandparents are 'Áshįįhi (Salt people).
            </p>
            <br>
            <p>
            I remember my grandmother showing me how to weave when I was a little girl and wish I was able to learn more from her.  My
            grandmother was killed in a head on collison with a drunk driver.  As a child I walked in the hills behind
            our own place and played outdoors, the internet didnt exist then nor did cell phones.  Today, it seems like our
            lives revolve around technology.
            </p>
            <br>
            <p>
            No matter what life throws at you, dust yourself off and
            take baby steps to a new beginning.  No one can determine your
            future but you.  Enjoy life and be thankful for the trials and
            always aim higher than you can reach.
            </p>
        </div>
        <div class="col-md-6">
          <img src="lib/images/beginning.jpg" class="img-responsive center-block img-circle" style="height: 200px; width: 200px"/>
          <h3 class="title">Beginning</h3>
          <p>
            Never truly understood the process behind a website until recently.
            The training I received in class was insightful and taught me how to construct
            this site.  There are still a lot to learn and I am looking forward
            to building another site.
          </p>
        </div>
      </div>
    </section>


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

  </body>
</html>
