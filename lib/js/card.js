$(document).ready(function(){
  var zindex = 10;

$("div.post").click(function(e){
  e.preventDefault();
  var isShowing = false;

  if ($(this).hasClass("show")) {
  isShowing = true
}

  if ($("div.posts").hasClass("showing")) {
      // a post is already in view
$("div.post.show")
  .removeClass("show");

  if (isShowing) {
        // this post was showing - reset the grid
$("div.posts")
  .removeClass("showing");
} else {
        // this post isn't showing - get in with it
$(this)
  .css({zIndex: zindex})
  .addClass("show");

}

    zindex++;

} else {
      // no posts in view
$("div.posts")
  .addClass("showing");
$(this)
  .css({zIndex:zindex})
  .addClass("show");
    zindex++;
}

});
});
