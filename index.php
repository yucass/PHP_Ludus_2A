<?php
$monfichier = fopen('compteur.txt', 'a');

$ligne = fgets($monfichier);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lucas JUNG</title>

<link href="css/style.css" rel="stylesheet"/>

<!--MENU-->
<script src="js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
<link rel="icon" href="images/favicon.ico" />
</head>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<body>
<em></em>
<!--BACK TO TOP-->
<a name="haut" id="haut"></a>
<div><a id="cRetour" class="cInvisible" href="#haut" title="Revenir en haut"></a></div>

<!--Script JS-->
<script>
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});
</script>


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--debut contener-->
<div id="contener">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--debut header-->
    <header>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="container clearfix">
       			 <div id="logo"><img src="images/paladin.png"/></div>
            	<nav>
            	<ul>
                	<li><a href="#intro">Intro</a></li>
                    <li><a href="#cv">Curriculum Vitae</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="#contact">Contact</a></li>
				</ul>
                </nav>
            </div>
     </header>
<!--fin header-->
<!--debut contenu-->
     <div id="contenu">


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--INTRO-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <article  id="intro" class="indexcentre"><br/> <br/><br/> <br/><br/> <br/><br/> <br/><br/> <br/><br/> <br/>
            	<h1>La passion du jeu...</h1>

                        	<p><i style="font-size:20px;">"Le jeu pour transmettre un message, émouvoir, interroger, divertir, et aujourd'hui, le jeu pour enseigner et transmettre."</i><br/><br/><br/>
Depuis plus de 20 ans je suis passionné par les jeux et je cherche aujourd'hui à créer les jeux de demain. Mon ambition est de participer à la création de serious game, partie intégrante de la formation dans l'avenir. 
<br/><br/>
<b>Ce qui me touche :</b> L'utilisation du jeu dans le domaine de la santé. Accepter son diabète, gérer la douleur, apprendre à vivre avec sa maladie, former les médecins et chirurgiens grâce à l'utilisation de l'interaction virtuel associée au ludisme. </p>
            </article>
            
            
            <div id="placeh1"><h1> Je suis un place holder</h1>
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--CV-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <article id="cv">
            	<h1>Lucas Jung - Graphiste</h1>
                        
                        <div id="photo">
                        	<img src="images/lucas.jpg" title="Lucas JUNG" alt="photo Lucas jung"/>
                        </div><br/>
              				<h2>Ambition</h2>
             				 <hr class="hr3"><br/> <br/> 
                              <p>Issu d'une formation d'infographiste et fort d'une expérience de plus de 7 ans, je cherche désormais à compléter mes connaissances grâce à une formation en multimédia et réalisation de serious game. L'école Ludus Académie dispense une formation de qualité et forme ses étudiants au monde du Web, de la programmation et surtout dans la game design et le level design. C'est avec cette formation que j'envisage de travailler dans le monde du jeu et de la simulation. <br/>
                              Aujourd'hui, je suis à la recherche d'un contrat de professionnalisation qui complétera ma formation théorique dans un contexte professionnel.
                             </p>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                        <h2>Qualités</h2>
             				 <hr class="hr3"><br/> <br/>
                        <p>
                        
                          Je suis pro-actif, motivé, curieux et j'ai un bon sens de l'écoute et du relationnel. J'aime le travail en équipe tout en étant un indépendant et autonome dans les tâches à accomplir.<br/>

Je sais mener un projet à bien, de la conception à la réalisation, en Print comme en Web, de la création de logo et de flyer jusqu'au site internet.<br/>

Je suis créatif, ambitieux et rigoureux. 
</p>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
							<h2>Le goût du challenge</h2>
             				 <hr class="hr3"><br/> <br/>
                        <p>
Les challenges sont une occasion de se mettre au défi et de progresser dans mes compétences. Depuis 2016 je me suis mis à l'épreuve en participant à différents hackathon.<br/><br/></p>
<div id="volontaire">
<!--Hacking Health Camp-->
<div id="oHacking" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px;" alt="Logo Hacking Health Camp" src="./images/hacking.png">
        <h2>Hacking Health camp</h2>

  <b style="color:#090"> Mars 2016 Hacking health camp Strasbourg :</b> Projet Incertain regard – Eye act<br/>
Création d'un jeu vidéo jouable uniquement par le mouvement oculaire à l'attention d'handicapés sévères<br/>
<b>Mon rôle :</b> designer graphique 2D : création des personnages pour le jeu vidéo<br/>
<b>Taille de l'équipe :</b> 10 personnes<br/>
<b>Prix :</b> Prix coup de cœur du public et prix coup de cœur du jury<br/><br/>
  </div>
</div>
 <p><a href="#oHacking"><img src="images/hacking.png" / class="miniimage"></a></p>

<!--Global Game Jam-->
<div id="oGlobal" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px; " alt="Logo Global Game Jam" src="./images/global.png">
        <h2>Global Game Jam</h2>

<b style="color:#090">Janv-2016 Global Game Jam :</b> Création d'un jeu de cartes sur le thème du rituel.<br/>
<b>Mon rôle :</b> Designer et chef de projet<br/>
<b>Taille de l'équipe :</b> 2 personnes<br/><br/><br/>
  </div>
</div>
 <p><a href="#oGlobal"><img src="images/global.png" / class="miniimage"></a></p>

<!--WoW TCG-->
<div id="oWow" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px;" alt="Logo wow tcg" src="./images/wowtcg.jpg">
        <h2>World of Warcraft TCG</h2>

<b style="color:#090">2010-2013 Organisateur officiel WoW TCG :</b> Organisation de tournois nationaux et internationaux.<br/>
<b>Mon rôle :</b> Organiser des tournois pour le compte de la société Cryptozoïc en France et en Europe. Juger et diriger une équipe de juge (4 personnes)
<b>Taille de l'événement :</b> Juge pour des événement de 300 personnes et organisateur pour des événement de 60 personnes.
  </div>
</div>
 <p><a href="#oWow"><img src="images/wowtcg.jpg" / class="miniimage"></a></p>
 
 <!--FoW TCG-->
<div id="oFow" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px;" alt="Logo fow tcg" src="./images/fow.jpg">
        <h2>World of Warcraft TCG</h2>

<b style="color:#090">2010-2013 Organisateur officiel WoW TCG :</b> Organisation de tournois nationaux et internationaux.<br/>
<b>Mon rôle :</b> Organiser des tournois pour le compte de la société Cryptozoïc en France et en Europe. Juger et diriger une équipe de juge (4 personnes)
<b>Taille de l'événement :</b> Juge pour des événement de 300 personnes et organisateur pour des événement de 60 personnes.
  </div>
</div>
 <p><a href="#oFow"><img src="images/fow.jpg" / class="miniimage"></a></p>
 </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>



                            </p><br/>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                         <h2>Expériences</h2>
                         <hr class="hr3"><br/><br/>
       
<div id="experience">                         
 <!--Top Office-->
<div id="oTopoffice" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px;" alt="Logo Top Office" src="./images/topoffice.jpg">
        <h2>Top Office</h2>

<b style="color:#090">Juin 2010 - Déc. 2015 :</b> Top Office (LAMPERTHEIM) en tant que responsable reprographie et vendeur informatique <i>- Création de produit graphique et imprimé, conseil client, veille informatique, technique de vente, gestion d'équipe (1-2 personnes), impression numerique, post-presse, pre-presse</i><br/><br/>
  </div>
</div>
 <p><a href="#oTopoffice"><img src="images/topoffice.jpg" / class="miniimage"></a></p>

 <!--Auto entrprise-->
<div id="oPaladin" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px; width:100px; border-radius:10px; border:solid 2px;" alt="Logo paladin web" src="./images/paladin.jpg">
        <h2>Auto entrprise</h2>

<b style="color:#090">2010-2013 :</b> Auto entrepreneur en communication et maintenance informatique <i>- Association Tandem, Kalino Danse, Batilest Construction, JOA Assistance, Traiteur Chez-Soi</i><br/><br/>
  </div>
</div>
 <p><a href="#oPaladin"><img src="images/paladin.jpg" / class="miniimage"></a></p>



<b style="color:#090">Mars 2008-mai. 2010 :</b> Mc DONALD'S (SCHILTIGHEIM) en tant que formateur à temps partiel <i>- Hygiene et securité, gestion d'équipe (5 personnes), suivi des objectifs, travail d'équipe</i><br/><br/>

<b style="color:#090">Décembre 2008 :</b> 3 mois à l'imprimerie ID Proconseil (NIEDERHAUSBERGEN)en tant qu'imprimeur et infographiste - réalisation de produit graphique et imprimé, création d'etiquette pour embouteillage (JP Chenet), utilisation de presse numerique<br/><br/>

<b style="color:#090">Juillet 2007 :</b> 2 mois à l'imprimerie GRANDIDIER (SCHILTIGHEIM) <i>- Utilisation de presse Offset et presse typographique, conseil client, pre-presse, post-presse (massicot, découpes, reliures)</i><br/><br/>

<b style="color:#090">Juin 2007 :</b> Stage de 6 semaines à l'agence de communication T@KTIC (STRASBOURG) <i>- Réalisation de produit graphique, decouverte du web, conseil client</i><br/><br/>

<b style="color:#090">Juillet 2006 :</b> 2 mois à LANXESS (LA WANTZENAU) en tant qu'ouvrier de chaine<br/><br/>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
						<h2>Formation</h2>
                         <hr class="hr3"><br/><br/>
<p>
<b style="color:#090">Sept. 2016 :</b> 2ème année du Cycle I : Développeur Multimédia à l'école LUDUS ACADÉMIE à Strasbourg<br/><br/>

<b style="color:#090">2006 - 2008 :</b> BTS Production Graphique au Lycée GUTENBERG à ILLKIRCH<br/><br/>

<b style="color:#090">2004 - 2006 :</b> BAC Production Imprimée au Lycée GUTENBERG à ILLKIRCH (Mention Bien)<br/><br/>

<b style="color:#090">2002 - 2004 :</b> BEP Production Imprimée au Lycée GUTENBERG à ILLKIRCH<br/><br/>
</p>
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 						 <h2>Langue</h2>
                         <hr class="hr3"><br/><br/>
 <p> <b style="color:#090">Anglais :</b> lu, écrit, parlé - A2 professionnel operationel</p><br/>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                         
                         <h2>Téléchargement</h2>
                         <hr class="hr3"><br/><br/>
 <p><a href="documents/Lucas_Jung_CV.pdf" target="_blank" title="Télécharger le CV">Vous pouvez télécharger le CV au format PDF (ouvre une nouvelle fenêtre)</a></p>
                         
                    </article>
                    			
                    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--PORTFOLIO-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <article id="portfolio">
            	<h1>Portfolio</h1>
                <p>
                cnmoaouezbmbzeiubzimuvbmzibvmuzbvmzuebvm<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/>
                lkecnmoznconomnzemonzmoefimzeinmzoinmozinvemo<br/></p>
                
                

										<!--test de visuel-->
<div id="oModal" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px;" alt="Lil bomb dude" src="./images/bomber.gif">
        <h2>Popup</h2>

        <p>Aliquip transverbero loquor esse ille vulputate exerci veniam fatua eros similis illum valde. Praesent, venio conventio rusticus antehabeo lenis. Melior pertineo feugait, praesent hos rusticus et haero facilisis abluo. </p>
        <p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.
        zdqzdqzdqzdqzdzqdqzd</p>
                <p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.
        zdqzdqzdqzdqzdzqdqzd</p>
                <p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.
        zdqzdqzdqzdqzdzqdqzd</p>
                <p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.
        zdqzdqzdqzdqzdzqdqzd</p>
  </div>
</div>
 <p><a href="#oModal"><img src="images/bomber.gif" /></a></p>

            </article>

    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--COMPETENCES-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <article id="competences">
            <br/><br/><br/><br/><br/>
            	<h1 >Compétences</h1>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div id="bloctxtcompetence">
                    	<div id="infographie">
                    	<h2>Infographie</h2>
                         <hr class="hr3"><br/><br/><br/>
                         
                       <b>Photoshop</b><div class="note"><div class="n75">75%</div></div><br/>
                       <br/>
                       <b>Indesign</b><div class="note"><div class="n85">85%</div></div><br/>
                       <br/>
                       <b>Illustrator</b><div class="note"><div class="n70">70%</div></div><br/>
                       <br/>
                       <b>Flash</b><div class="note"><div class="n50">50%</div></div><br/>
                       <br/>
                       <b>Quark Xpress</b><div class="note"><div class="n60">60%</div></div><br/>
                      </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                     <div id="web">
                       <h2>Web</h2>
                         <hr class="hr3"><br/><br/><br/>
                         <br/>
                         <b>Dreamweaver</b><div class="note"><div class="n80">80%</div></div><br/>
                       <br/>
                       <b>HTML-CSS</b><div class="note"><div class="n70">70%</div></div><br/>
                       <br/>
                       <b>PHP-SQL</b><div class="note"><div class="n40">40%</div></div><br/>
                       <br/>
                       <b>Joomla!</b><div class="note"><div class="n80">80%</div></div><br/>
                       <br/>
                       <b>Wordpress</b><div class="note"><div class="n60">60%</div></div><br/>
                       <br/>
                       <b>Prestashop</b><div class="note"><div class="n70">70%</div></div><br/>
                     </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                       <br/><br/><br/><br/><br/>
                     <div id="jeuvideo">
                        <h2>Jeu vidéo et 3D</h2>
                         <hr class="hr3"><br/><br/><br/>
                         <br/>
                       <b>Construct</b><div class="note"><div class="n60">60%</div></div><br/>
                       <br/>
                       <b>ArchiCAD</b><div class="note"><div class="n40">40%</div></div><br/>
                       <br/>
                       <b>Unity</b><div class="note"><div class="n25">25%</div></div><br/>
                       <br/>
                     </div>
                       
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
					<div id="office">
                         <h2>Office</h2>
                         <hr class="hr3"><br/><br/><br/>
                         <br/>
                       <b>Word</b><div class="note"><div class="n85">85%</div></div><br/>
                       <br/>
                       <b>Excel</b><div class="note"><div class="n75">75%</div></div><br/>
                       <br/>
                       <b>Publisher</b><div class="note"><div class="n90">90%</div></div><br/>
                       <br/>
                       <b>Powerpoint</b><div class="note"><div class="n60">60%</div></div><br/>
                     </div>
                       
                       <br/><br/><br/><br/><br/>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                     <div id="autre">
                       <h2>Autres</h2>
                         <hr class="hr3"><br/><br/><br/>
                         <br/>
                       <b>SEO</b><div class="note"><div class="n40">40%</div></div><br/>
                       <br/>
                       <b>W3C</b><div class="note"><div class="n30">30%</div></div><br/>
                       <br/>
                       <b>Responsive</b><div class="note"><div class="n60">60%</div></div><br/>
                       <br/>
                       <b>Branding</b><div class="note"><div class="n40">40%</div></div><br/>
                       <br/>
                       <b>Python</b><div class="note"><div class="n40">40%</div></div><br/>
                       
                    </div>
                    </div>
                   
				</article>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<article>
                <br/><br/><br/><br/><br/>
                <h2>Vente</h2>
                <hr class="hr3"><br/><br/><br/>
Accompagnement	clientèle, système d'encaissement,	phoning	et	démarchage,	commande, gestion des stocks, mise en rayon, expédition et traitement des commandes<br/><br/><br/>
<br/><br/><br/><br/><br/>
				<h2>Imprimerie</h2>
                <hr class="hr3"><br/><br/><br/>
Création de fichier (carte de visite, logo, flyers...), utilisation	de	presses	numériques,	de copieurs et de traceurs, utilisation de presse offset, tampons, reliures<br/><br/>
<br/><br/><br/><br/><br/>
				<h2>Autres</h2>
                <hr class="hr3"><br/><br/><br/>
Management d'équipe, création d'entreprise, formateur<br/>
                         </p><br/>
                         </article>

            </article>
            <article id="contact">
            	<h1>Contact</h1>
                <article>
                    	
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--CONTACT-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->                     
                        
                        
                        <div id="oContact" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px;" alt="Lil bomb dude" src="./images/bomber.gif">
<h1 class="centrer">Me contacter</h1>
                        
                        <p> Pour toute demande de renseignement, merci de nous contacter par ce formulaire</p>
                        
                        <form action="#oContacts" method="post" name="formcontact">
                        	<input type="text" placeholder="Nom" id="nom" name="nom"> <br/>
                        	<input type="text" placeholder="Prénom" id="prenom" name="prenom"> <br/>
                            <input type="text" placeholder="Email" id="email" name="email"><br/>
                            <input type="text" placeholder="Sujet" id="sujet" name="sujet">
                            <br/>
                        	<textarea placeholder="Message" id="message" name="message"></textarea> <br/>
                           <!-- Veuillez recopier ce code <br/>
                            <img src="captcha.php" title="Captcha JUNG Lucas" alt="Code Captcha"/> <br/><br/><br/>
                            <input type="text" name="captcha"><br/>-->
                            
                        	<input type="submit" value="Envoyer"> <br/>
                        </form>
  </div>
</div>
 <p><a href="#oContact"><img src="images/bomber.gif" /></a></p>
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--CONTACT - MERCI-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                        
                         <div id="oContacts" class="oModal">
  <div>
   <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
    <img style="float: right; margin: 0 0 0 20px;" alt="Lil bomb dude" src="./images/bomber.gif">
<h1 class="centrer">merci</h1>
                        
                        <p> merci pour votre message, nous vous repondrons dès que possible<br/><br/>Cordialement<br/>Lucas JUNG<br/><br/><i>Résumé de votre message :</i><br/></p>
                        <?php 
						$order   = array("\r\n", "\n", "\r");
						$replace = '<br />';
						$today=date("Y-m-d");
						$heure=date("H");
						$minute=date("i");
						$texte=$_POST['nom']."<br/>".str_replace( $order, $replace, nl2br($_POST['prenom']))."<br/>".str_replace( $order, $replace, $_POST['message']).'<br/>';
						fseek($monfichier, 0);
						fputs($monfichier, "le : $today à $heure heure et $minute minutes"."<br/>".$texte.'<br/>'."\r\n");
						



						
						 ?>
                        <?php
						
(isset($_POST['nom']) AND isset ($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['sujet']) AND isset($_POST['message']));

	echo '<strong>Prénom et Nom : </strong>'.htmlspecialchars($_POST['prenom'])." ".htmlspecialchars($_POST['nom']);
	echo '<br/>';
	echo '<strong>E-mail : </strong>'.htmlspecialchars($_POST['email']);
	echo '<br/>';
	echo '<strong>Message : </strong>'.'<p>'.nl2br(htmlspecialchars($_POST['message'])).'</p>';
	echo '<br/>';
fclose($monfichier);
?>

  </div>
</div>

                        
                        
                    </article>
                </p>
            </article>
                        <!--fin contenu-->
         </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                     <!--debut footer-->
            <footer>
            
            <div id="social">
            <a href="https://www.facebook.com/jung.martial" title="Lien Facebook" target=_blank><img src="images/mlf.jpg" alt="Logo lien Facebook" title="Logo lien Facebook"></a>
            <a href="https://fr.linkedin.com/in/lucasjung" title="Lien LinkedIn" target=_blank><img src="images/mll.png" alt="Logo lien LinkedIn" title="Logo lien LinkedIn"></a>
            

            </div>
            	<div id="adresse"><p>
                <b>Lucas JUNG</b><br/>
                9 rue Albert Sayet<br/>
                67200 Strasbourg<br/>
                06 32 05 95 95<br/>
                jung_lucas@hotmail.fr
                </p></div>
            <div id="copyright">Copyright Lucas JUNG 2016</div>
            
            </footer>
                        <!--fin footer-->
</div>
            <!--debut contener-->

</body>
</html>
