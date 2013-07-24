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
		
		<li><a href="http://www.youtube.com/watch?v=MMz8RVT6hKY">Que es el mercadeo en red.</a></li>
		<li><a href="http://www.youtube.com/watch?v=ndqhlhP7jhY">Ventajas de las Redes de Mercadeo.</a></li>
		<li><a href="http://www.youtube.com/watch?v=6ReYYtc_tyY">¿Qué es el Network Marketing?</a></li>		
        <li><a href="http://www.youtube.com/watch?v=GnBnwJwYgAQ">Mercadeo en red,Negocios Multinivel vs Negocios tradicionales</a></li>
        <li><a href="http://www.youtube.com/watch?v=3cGkUlJjnSw">Como evoluciono el Marketing Multinivel-Redes de mercadeo-mlm</a></li>
        <li><a href="http://www.youtube.com/watch?v=C0zU1MvjMmM">NETWORK MARKETING, REDES DE MERCADEO, LA TENDENCIA DE NEGOCIOS A NIVEL GLOBAL, NO TE QUEDES FUERA</a></li>	        
    </ul>
</div>