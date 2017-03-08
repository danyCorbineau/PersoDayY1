<?php
require 'scriptPhp.php';
?>



<!DOCTYPE html>
<html>
	
	
	<!-- header whith metaData, bootstrap and css -->
	<head>
		
		<!-- Meta data -->
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="Description" CONTENT="Je vous propose de dessiner votre futur bijoux.">
		<meta name="Keywords" CONTENT="Bijoux">
		
		<title>Dessine-moi un Bijou</title>
		<meta name="description" content=".........">
		
		
		<!-- add bootstrap-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

		
		<!-- new Style css-->
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
  <!-- End of the header-->
	
	
  <!-- Body of the page -->
  <body id="page-top">
	
	
	<!-- Navigation bar-->
      <header class="navbar navbar-fixed-top" id="navid" role="navigation">

      <!-- Navigation OK
      ================================================== -->
      
          <div class="container-fluid">
              <div class="navbar-header">
					<button type="button" data-target=".collapse" data-toggle="collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    </button>
				    <a href="#page-top" class="navbar-brand navclass">Dessine-moi un Bijou</a>
              </div>
              <div class="collapse navbar-collapse" >
				<ul class="nav navbar-nav navbar-right margin-me">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a href="#accueil" class="navclass">Présentation du Site</a></li>
					<li><a href="#les_types_de_bijoux" class="navclass">Les Types de Bijoux</a></li>
					<li><a href="#les_métaux" class="navclass">Les Métaux</a></li>
					<li><a href="#les_pierres" class="navclass">Les Pierres</a></li>
					<li><a href="#les_serties" class="navclass">Le Sertissage</a></li>
					<li><a href="#contact" class="navclass">Dessiner mon Bijou</a></li>
				</ul>
              </div>
          </div>
      </header>
	
      <div class="navbar navclass" style="margin-bottom:0;" role="navigation"></div>
	
    <!-- Carousel -->
      <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
                <?php  
                $a=$bd->getImageCreation();
                $d=$a->fetch();
                echo '<div class="item active"> <img src="assets/img/'.$d['image'].'" alt="Croquis"/></div>
                ';
                while($d=$a->fetch())
                {
                    echo '<div class="item"> <img src="assets/img/'.$d['image'].'" alt="Croquis"/></div>
                ';
                }

                ?>
          </div>
      </div>
	
	
      <!-- All blocks -->
		
		
      <!-- Block Accueil -->
      <div id="accueil">
		<div class="row">
			<h1 class="text-center">Présentation du Site</h1>
			<img class="col-sm-12 col-md-5 imageNot100" src="assets/img/images/DSCN2440.jpg" alt="Accueil image"/>     
			<p class="col-sm-12 col-md-7">Si vous êtes sur Dessine-moi un Bijou, c'est surement que vous chercher à créer un Bijou personalisé</p>
		</div>
      </div>
		
      <!-- Blocks Type De Bijoux -->
      <div  id="les_types_de_bijoux">
        <h1 class="text-center" style="margin-bottom: 50px;">Les Types de Bijoux</h1>
		
		<!-- All type -->
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-hover">
					<tbody>
					<?php
                        $a=$bd->getTypeBijou();
                        while($d=$a->fetch())
                        {
                            echo '
                            <tr>
                            <td><img class="thumbnail" style="padding:0;" src="assets/img/'.$d['image'].'" alt="Image de bijoux" height="140" width="140" /></td>
                            <td><h2 class="text-center">'.$d['nom'].'</h2></td>
                            <td><p class="text-center">'.$d['description'].'</p></td>
                            </tr>
                            ';
                        }
                        ?>
					</tbody>
				</table>
			</div>
		</div>
      </div>
		
      <!-- Block Les Metaux -->
	  <div id="les_métaux">
			<h1 class="text-center" style="margin-bottom: 50px;">Les Métaux</h1>
			
				<div class="container-fluid">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Image</th>
									<th>Nom</th>
									<th>Couleur</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
							     <?php
								    $a=$bd->getMetaux();
								    while($d=$a->fetch())
								        {
									       echo '
									       <tr>
										      <td ><img class="thumbnail" style="padding:0;" src="assets/img/'.$d['image'].'" alt="Métaux"  height="100" width="100"/></td>
										      <td><h3>'.$d['nom'].'</h3></td>
										      <td>'.$d['couleur'].'</td>
										      <td>'.$d['description'].'</td>
										      <td>'.$d['methode_entretien'].'</td>
									       </tr>';
								        }
								
							     ?>
								
							</tbody>
						</table>
					</div>
				</div>
				
			<!-- fin metaux -->

        
      </div>
	  
	  <!-- Block Les Pierres -->
	  <div  id="les_pierres">
            <h1 class="text-center" style="margin-bottom: 20px;">Les Pierres</h1>
		
			<!-- Color selector -->
			<div class="row" style="margin-bottom: 30px;">
				<div class=" dropdown  col-sm-12 text-center">
				    <button class="btn btn-default dropdown-toggle" id="selecteur" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					   Couleur
					   <span class="caret"></span>
				    </button>
                    <ul class=" dropdown-menu centerDropdown" aria-labelledby="selecteur">
                        <li><a href="index.php?color=r#les_pierres">Rouge</a></li>
                        <li><a href="index.php?color=b#les_pierres">Bleu</a></li>
                        <li><a href="index.php?color=v#les_pierres">Vert</a></li>
                        <li><a href="index.php?color=j#les_pierres">Jaune</a></li>
                        <li><a href="index.php?color=vi#les_pierres">Violet</a></li>
                        <li><a href="index.php?color=n#les_pierres">Noir</a></li>
                        <li><a href="index.php?color=bl#les_pierres">Blanc</a></li>
                        <li><a href="index.php?color=g#les_pierres">Gris</a></li>
                        <li><a href="index.php?color=t#les_pierres">Transparent</a></li>
                        <li><a href="index.php?color=mc#les_pierres">Multi-color</a></li>
                    </ul>
				</div>
			</div>
		
            <!-- All stones -->
            <div class="container-fluid">
             <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                          <th>Image</th>
                          <th>Nom</th>
                          <th>Taille</th>
                          <th>Couleur</th>
                          <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    if(isset($_GET['color']))
                    {
                        //nom, taille, couleur, couleurR
                        $a=$bd->sendRqt("SELECT nom AS nom, taille, couleur, couleurR, image, description FROM pierres WHERE LOWER(couleurR)=LOWER('".$_GET['color']."')");
                    }
                    else
                    {
                        // *4rand
                        $a=$bd->sendRqt("SELECT nom AS nom, taille, couleur, couleurR, image, description FROM pierres WHERE id_pierre BETWEEN 0 AND 3" );
                    }

                    while($d=$a->fetch())
                    {
                            echo '
                            <tr>
                                <td ><img class="thumbnail" style="padding:0;" src="assets/img/'.$d['image'].'" alt="Métaux"  height="100" width="100"/> </td>
                                <td><h3>'.$d['nom'].'</h3></td>
                                <td>'.$d['taille'].'mm</td>
                                <td>'.$d['couleur'].'</td>
                                <td>'.$d['description'].'</td>
                            </tr>
                            ';
                    }


                ?>
                </tbody>
                </table>
            </div>
	       </div>
	</div>
     
    <!-- Block Sertisage -->
    <div id="les_serties">
        <h1 class="text-center">Le Sertissage</h1>
		<!-- Boutons Sertissage -->
		
		<div class="text-center" style="margin-bottom: 10px;">
			
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_griffes');"><h4>Serti à griffes</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_clos');"><h4>Serti clos</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_demi_clos');"><h4>Serti demi-clos</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_masse');"><h4>Serti massé</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_grains');"><h4>Serti à grains</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_rail');"><h4>Serti rail</h4></button></a>
			<a><button type="button" class="btn btn-default" onClick="changeSerti('divSerti_descendu');"><h4>Serti descendu</h4></button></a>
		</div>
		<h3 class="col-sm-12" style="margin-bottom:20px; text-align: center;">Il existe de nombreuses façons de sertir une pierre, en voici quelqu'une</h3>
		
		<div id="listTextSertis" >
			<div id="divSerti_griffes">
				<h3 class="text-left" id="Serti_griffes">Serti à griffes</h3>
				<p class="col-sm-12 sertiPara">Le serti à griffes est de loin le type de sertissage le plus utilisé en joaillerie. Il consiste à maintenir la pierre à l’aide de griffes en or ou en platine, que le sertisseur plaque sur la pierre. Leur nombre peut aller de trois à plus d’une dizaine pour les gemmes importantes. Néanmoins, c’est bien le serti 4 griffes qui donne les plus beaux rendus. Il est à la fois sécurisant, discret, et esthétique. Il peut être utilisé pour des pierres centrales, ou des pierres d’entourage si leur dimension le permet, sans quoi elles seraient noyées dans le métal.</p>
			</div>
			
			<div id="divSerti_clos">
				<h3 class="text-left" id="Serti_clos">Serti clos</h3>
				<p class="col-sm-12 sertiPara">Il est lui aussi très utilisé en joaillerie. Comme son nom l’indique, la pierre est complètement entourée de métal. Il est extrêmement sécurisant, et permet d’obtenir des bijoux plus importants. Le serti clos est cependant à éviter pour les pierres de petite dimension. Afin d’apporter une bonne tenue dans le temps, une épaisseur minimum d’or est en effet nécessaire. Le risque est donc d’étouffer la pierre avec le métal, lui empêchant de capter toute la lumière dont elle a besoin.</p>
			</div>
			
			<div id="divSerti_demi_clos">
				<h3 class="text-left" id="Serti_demi_clos">Serti demi-clos</h3>
				<p class="col-sm-12 sertiPara">Lorsque l’on souhaite créer un bijou aux formes généreuses, le serti demi-clos est un bon compromis entre le style du bijou, et l’éclat de votre pierre précieuse. Il permet d’obtenir des bijoux plus cossus, tout en permettant à la lumière de pénétrer la gemme. On peut ainsi jouer sur les volumes d’une bague pour obtenir un rendu très aéré tout en étant présent sur le doigt, ou au contraire pavé complètement la bague, sans qu’un rubis ou un diamant de 3 carats soit nécessaire.</p>
			</div>
			
			<div id="divSerti_masse">
				<h3 class="text-left" id="Serti_masse">Serti massé</h3>
				<p class="col-sm-12 sertiPara">Il consiste à inclure la pierre dans le volume de la bague, de façon à ce que le métal affleure le dessus de la pierre. On peut ainsi créer des bijoux aux formes plus contemporaines. Bien qu’il soit très protecteur pour la pierre, il est bon de rappeler qu’un sertissage, quel qu’il soit, protégera la pierre, à la seule condition qu’il soit exécuté par un sertisseur expérimenté.</p>
			</div>
			
			<div id="divSerti_grains">
				<h3 class="text-left" id="Serti_grains">Serti à grains</h3>
				<p class="col-sm-12 sertiPara">Le sertissage à grains est le type de sertissage le plus utilisé pour les pierres de pavage rondes. Il s’agit d’une bande de métal, dans laquelle le sertisseur vient fixer les pierres, tout en conservant un filet de métal de chaque côté des brillants. Pour cela, il creuse le métal. A l’aide d’un outil, il soulève ce que l’on appelle des « grains », qui servent à maintenir les pierres. C’est lors du sertissage que les filets apparaissent. Deux grains peuvent suffire à fixer correctement la pierre, mais lorsque leur dimension le permet on peut alors lever plusieurs grains, et même utilisé des grains de décor entre les pierres. Un sertissage à grains bien exécuté est un excellent signe pour reconnaitre un bijou de qualité. Seuls les sertisseurs expérimentés parviennent à obtenir des grains et des filets réguliers. C’est non seulement l’esthétique de votre bijou qui en dépend, mais également sa tenue dans le temps. Si les grains ou les filets sont trop fins, les pierres tomberont inévitablement.</p>
			</div>
			
			
			<div id="divSerti_rail">
				<h3 class="text-left" id="Serti_rail">Serti rail</h3>
				<p class="col-sm-12 sertiPara">Il est utilisé en haute joaillerie pour sertir les bandes calibrées de diamants et autres pierres de couleur. Il s’agit là de sertir les pierres dans un rail de métal afin qu’il n’y ait aucun espace entre elles. Afin que le rendu final soit le plus fin possible, et que l’or ou le platine soient les moins visibles possible, une retaille des pierres est généralement nécessaire pour qu’elles épousent parfaitement les courbes du bijou. On l’utilise également pour la réalisation d’alliance en diamants taille princesse, et plus rarement de pierres rondes. Dans ce cas, bien que le travail du sertisseur doive être précis, une retaille des pierres n’est pas nécessaire.</p>
			</div>
			
			<div id="divSerti_descendu">
				<h3 class="text-left" id="Serti_descendu">Serti descendu</h3>
				<p class="col-sm-12 sertiPara">Le serti dit descendu, consiste à sertir des pierres de pavage sur une bande de métal de même largeur, à l’aide de minuscules griffes. Bien qu’il soit très prisé, il s’agit là d’une aberration. Sous couvert d’apporter plus de légèreté aux bijoux, il est en réalité utilisé pour masquer la taille diamants. Les griffes les font en effet paraitre plus importants, et moins de pierres sont nécessaires pour couvrir une même surface. Mais l’éclat du bijou en est très altéré, et il est inévitable que les diamants finissent par tomber si le bijou est porté au quotidien. Il est alors impossible de le réparer convenablement.</p>
			</div>
		</div>
    </div>
    
    <!-- Block Contact-->
    <div id="contact">
        <h1 class="text-center" style="margin-bottom: 10px;">Dessiner mon Bijou</h1>
        <h2 class="text-center" style="margin-bottom: 1%;">Commander une palette de dessins</h2>
        <div class="row text-center">
            <p class=" col-lg-4 col-md-4 col-sm-12">tél: 06600660</p>
            <p class=" col-lg-4 col-md-4 col-sm-12">skype: bijoux</p>
            <p class=" col-lg-4 col-md-4 col-sm-12">web: mycaillou.com</p>
        </div>
    </div>
	 



    <!-- footer with dropdown for Mentions Legales and Politique de confidentialité -->
    <footer class="navbar">
		<div class="container-fluid ">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
		</div>

        <!-- List of links -->
        <ul class="nav navbar-nav">
            <li><a href="mentions_legale.html" class="color-me">Mentions Légales</a></li>
            <li class="position:fixed; right:1%;"><a href="mentions_legale.html#pol_conf" class="color-me">Politique de Confidentialité</a></li>
        </ul>
	</footer>
	
	
	<!-- bouton descendre -->
    <div class="btn nextButtonCss" onClick="nextButton()">
        <h3>
            <span class="glyphicon glyphicon-chevron-down"></span>
                Continuer
            <span class="glyphicon glyphicon-chevron-down"></span>
        </h3>
    </div>
	
	<!-- All script-->
	
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- js crée-->
    <script src="scriptJS.js"></script>
		
	</body>

</html>