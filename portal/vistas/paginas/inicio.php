<style>
.box {
	text-align:center;
	position:relative;
	
}
.box {
	width:70%;
	
	background:#FFF;
	margin:40px auto;
	padding:10px;
}
/*==================================================
 * Effect 7
 * ===============================================*/
.effect7
{
  	position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect7:before, .effect7:after
{
	content:"";
    position:absolute;
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:0;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}
.effect7:after
{
	right:10px;
    left:auto;
    -webkit-transform:skew(8deg) rotate(3deg);
       -moz-transform:skew(8deg) rotate(3deg);
        -ms-transform:skew(8deg) rotate(3deg);
         -o-transform:skew(8deg) rotate(3deg);
            transform:skew(8deg) rotate(3deg);
}
#contenido{
	z-index:1;
	position:relative;
}
.sombra_banner{
	position: relative;
	z-index: 2;
}
</style>
<div style="padding:10px 30px 10px 30px;">
	<h2>Bienvenido!</h2>	
	<p>
	Únete a nuestra comunidad de emprendedores!, tienes ante ti la oportunidad de aumentar tus ingresos, invita a tus amigos, 
	conocidos y familiares a unirse a esta comunidad, y veras como todos salen ganando!.
	</p>




	testimonios de nuestros socios:<br>
	<div class="box effect7">
		<h2>Jose Rodriguez</h2>
		<p>“Tengo 3 semanas siendo socio de la comunidad DiamondPeople y he empezado a ganar $1000.00 semanales!, solo haciendo las recargas que siempre hacia.”
		</p>
	</div>
		
	<div class="box effect7">
		<h2>Fulanito de Tal</h2>
		<p>“Invite a toda mi familia y amigos, y ahora gano $10,000.00 pesos semanales de la comunidad!”</p>
	</div>
	  

	<br />
	<div style="display:inline-block;">
	<h3 style="margin: 0;padding: 0;color: #464646;">Tu como ellos únete y empieza a ganar!</h3>
					  <a style="float:right;" href="<?php echo $APP_PATH; ?>asociados/afiliate">Haz click aqui y afiliate</a>
	</div>
					 
</div>