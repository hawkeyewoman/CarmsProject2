<!-- And I also include the css for this in the style tag down below. -->
<div class="container">
  <div class="row">
    <ul class="list-unstyled">
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="img-fluid center-block" src="lib/images/ShayDarius.png" alt="">
            <div class="overlay">
               <h2 class="demoText">Rose Kennedy</h2>
               <p class="info demoText">"Life isn’t a matter of milestones, but of moments."</p>
            </div>
        </div>
      </li>
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="center-block" src="lib/images/Parrot.png" style="height:300px;" alt="">
            <div class="overlay">
               <h2 class="demoText">William Shakespeare</h2>
               <p class="info demoText">"A light heart lives long."</p>
            </div>
        </div>
      </li>
      <li class="col-lg-4 col-md-4 col-sm-6 com-xs 12">
        <div class="hoverEffect">
            <img class="img-fluid center-block" src="lib/images/mountain.jpg" alt="">
            <div class="overlay">
              <h2 class="demoText">Albert Einstein</h2>
              <p class="info demoText">"A person who never made a mistake never tried anything new."</p>
            </div>
        </div>
      </li>
    </ul>
  </div>
</div>



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
filter: grayscale(1) blur(2px);filter: grayscale(1) blur(2px);
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

.hoverEffect p.info {
display: inline-block;
text-decoration: none;
padding: 7px 14px;
border: 1px solid #fff;
margin: 50px 0 0 0;
background-color: transparent;
}

.hoverEffect p.info:hover {
box-shadow: 0 0 5px #fff;
}

.hoverEffect p.info, .hoverEffect h2 {
-webkit-transform: scale(0.7);
-ms-transform: scale(0.7);
transform: scale(0.7);
-webkit-transition: all 0.4s ease-in;
transition: all 0.4s ease-in;
opacity: 0;
filter: alpha(opacity=0);
}

.hoverEffect:hover p.info, .hoverEffect:hover h2 {
opacity: 1;
filter: alpha(opacity=100);
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1);
}
</style>
