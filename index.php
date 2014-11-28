<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href="./css/StyleIndex.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
  <!-- en-tête de la page -->
  <div id="haut">
    <!-- Affichge du menu par defaut titre de la page. Celui-ci disparait lors du passage de la souris-->
    
    <div id="menu0"> 
      <div id="titre">
        TITRE APPLI 
      </div>  
    </div>
    
    <!--Affichage du menu de recherche. Celui-ci s'affiche lors du passage de la souris -->
    <div id="menu1">
      <!-- Recherche par le nom -->
      <div id="recherche">
        Recherche par nom : <INPUT type="text" name="Nom de l'élément">
      </div>
       <!-- bouton de recherche --> 
      <div id="bouton">
       <div id="boutonR" onclick="self.location.href='recherche.php'">
        OK
       </div>
      </div> 
        
      <!-- recherche par genre -->
      <div id="genre">
       Genre
       <ul>
        <li> thriller </li>
        <li> action </li>
        <li> comédie </li>
        <li> comique </li>
        <li> anime </li>
        <li> commédie - romantique </li>
        <li> drame </li>
        <li> western </li>
       </ul>
      </div> 
      <div id="note">
        Note
       <ul>
        <li> à chier </li>
        <li> moyen </li>
        <li> pas mal </li>
        <li> bon </li>
        <li> très bon </li>
        <li> exellent </li>
       </ul>
      </div>  
    </div>
    
</div>
  <div id="corp">
    <div class="ligne">
      
      <div class="image">
        <img src="image/sample.jpg" alt="nom du film" />
      </div>
      
      <div class="image">
        <img src="image/sample.jpg" alt="nom du film" />
      </div>
      
      <div class="image">
        <img src="image/sample.jpg" alt="nom du film" />
      </div>
      
      <div class="image">
        <img src="image/sample.jpg" alt="nom du film" />
      </div>
      
      <div class="image">
        <img src="image/sample.jpg" alt="nom du film" />
      </div>
      
    </div>
    <div class="ligne">
        
    </div>
  </div>

</body>

</html>