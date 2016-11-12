<!-- Hey Carm!  So I believe I found the bug, and it had to do with your little transition
    when you hovered over an element, but those for that particular class  were what was messing up the alignment.
    So, I went ahead and wrote this out for you.  If you don't like it, you can always revert
    back to the the other way that you had it.  It was just easier to write this out to work with your
    current layout.  It's nearly a similar transition to the other one you where doing, but this just starts out
    with a blurred filter.
                        *Krieg
                      -->


<!-- And I also include the css for this in the style tag down below. -->
<div class="container">
  <div class="row">
    <ul class="list-unstyled">
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="img-fluid center-block" src="lib/images/ShayDarius.png" alt="">
            <div class="overlay">
               <!-- <h2></h2> -->
               <!-- <a class="info" href="#">link here</a> -->
            </div>
        </div>
      </li>
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="center-block" src="lib/images/Carm.jpg" style="height:300px;" alt="">
            <div class="overlay">
               <h2 class="demoText">Contact Info</h2>
               <a class="info demoText" href="#">hawkeyewoman2013@gmail.com</a>
            </div>
        </div>
      </li>
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="img-fluid center-block" src="lib/images/rain.png" alt="">
            <div class="overlay">
               <!-- <h2></h2> -->
               <!-- <a class="info" href="#">link here</a> -->
            </div>
        </div>
      </li>
    </ul>
  </div>
</div>



<!-- Here is the CSS for the code above.  I commented out some stuff, but you can undo
them, but got to adjust the css for them so they line up correctly too.   -->
<style>

.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
 }

.hoverEffect {
width: 100%;
height: 100%;
overflow: hidden;
position: relative;
text-align: center;
cursor: default;
}

.hoverEffect .overlay {
  width: 370.63px;
    height: 100%;
    margin-left: -5px;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
}

.hoverEffect img {
display: block;
position: relative;
-webkit-transition: all 0.4s ease-in;
transition: all 0.4s ease-in;
filter: grayscale(1) blur(3px);filter: grayscale(1) blur(3px);
height: 300px;
}

.hoverEffect:hover img {
filter: none;
transform: scale(1.2);/*This is the one you really need, the other two are just for other browsers*/
-webkit-transform: scale(1.2);/*this is for browsers like apple safari*/
-ms-transform: scale(1.2);/*this one if for Internet Explorer browser*/
}

.hoverEffect h2 {
text-transform: uppercase;
text-align: center;
position: relative;
font-size: 17px;
padding: 10px;
background: rgba(0, 0, 0, 0.6);
}

.hoverEffect a.info {
display: inline-block;
text-decoration: none;
padding: 7px 14px;
border: 1px solid #fff;
margin: 50px 0 0 0;
background-color: transparent;
}

.hoverEffect a.info:hover {
box-shadow: 0 0 5px #fff;
}

.hoverEffect a.info, .hoverEffect h2 {
-webkit-transform: scale(0.7);
-ms-transform: scale(0.7);
transform: scale(0.7);
-webkit-transition: all 0.4s ease-in;
transition: all 0.4s ease-in;
opacity: 0;
filter: alpha(opacity=0);
}

.hoverEffect:hover a.info, .hoverEffect:hover h2 {
opacity: 1;
filter: alpha(opacity=100);
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1);
}
</style>
