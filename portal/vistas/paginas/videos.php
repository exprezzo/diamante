  <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css">
  <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
  <link rel="stylesheet" href="<?php echo $APP_PATH; ?>web/youtube-video-gallery.css">
  
  <script src="http://clanceyp.github.io/youtube-video-gallery/lib/js/jquery.youtubevideogallery.js"></script>
  <script>
    $(document).ready(function(){
        $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'colorbox'} );
    });
</script>
  
  
  <div id="test">
    <h2 style="text-align:center;margin-top:20px;">Galeria de videos</h2>
    
    <ul class="youtube-videogallery" style="text-align:center; margin-top:80px;margin-left:17px;">
		
		<li><a href="http://www.youtube.com/watch?v=pAwR6w2TgxY">Pogo - Alice</a></li>
		<li><a href="http://www.youtube.com/watch?v=JVxe5NIABsI">Pogo - Upular</a></li>
		<li><a href="http://www.youtube.com/watch?v=UlS_Rnb5WM4">Pogo - Skynet</a></li>		
        <li><a href="http://www.youtube.com/watch?v=qs1bG6BIYlo">Pogo - Wishery (Snow White Remix)</a></li>
        <li><a href="http://www.youtube.com/watch?v=CjgT8Af1kGc">Bad scooting</a></li>
        <li><a href="http://www.youtube.com/watch?v=4psVnsYlBok">Good scooting</a></li>
        <li><a href="http://www.youtube.com/watch?v=05Cgtg_N4eI">Knitting</a></li>
        <li><a href="http://www.youtube.com/watch?v=xPr4g7o46DY">Sunrise yoga</a></li>
        <li><a href="http://www.youtube.com/watch?v=pocEg6a6ZpM">YUI Roundtable</a></li>
        <li><a href="http://www.youtube.com/watch?v=ishBOmjHoXE">Sporting moments</a></li>
        <li><a href="http://www.youtube.com/watch?v=j_OyHUqIIOU">Big red balloon</a></li>
        <li><a href="http://www.youtube.com/watch?v=0Yww2VhbFL8">Tango!</a></li>
    </ul>
</div>