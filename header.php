<!DOCTYPE html PUBLIC "..//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 

<meta name="author" content="SIO2" /> 
<meta name="keywords" content="Mon Appli Web" /> 
<meta name="description" content="Appli Web pour le TP Git" /> 
<meta name="date" content="2012-12-22T08:30:45+01:00" /> 
<!-- <link rel="shortcut icon" type="image/x-icon" href="monIcon.ico" /> --> 
<title>Mon application Web</title> 
<script type="text/javascript"> 
  <!-- 
  function verif(entree) { 
  var seulement_ceci ="0123456789-+*/."; 
  for (var i = 0; i < entree.length; i++) 
    if (seulement_ceci.indexOf(entree.charAt(i))<0) 
      return false; 
  return true; 
  } 
  function affResult() { 
  var x = 0; 
  if (verif(window.document.maCalculette.ecran.value)) 
    x = eval(window.document.maCalculette.ecran.value); 
  window.document.maCalculette.ecran.value=x; 
   } 
  function touche(caracteres) { 
  window.document.maCalculette.ecran.value=window.document.maCalculette.ecran.value + 
caracteres; 
  } 
   --> 
</script>
<style type="text/css"> 
#maDivMenu{padding:25px 15px 0 15px;background:#fcead9;} 
  ul#monMenu{list-style-type:none;width:100%;position:relative;height:27px;font-family:"Trebuchet MS",Arial,sans-serif;font-size:13px;font-weight:bold;margin:0;padding:11px 0 0 0;} 
 ul#monMenu li{display:block;float:left;margin:0 0 0 24px;height:27px;} 
 ul#monMenu li.left{margin:0;} 
 ul#monMenu li a{display:block;float:left;color:#e06c08;background:#fdf1e5;line-height:27px;text-decoration:none;padding:0 17px 0 18px;height:27px;} 
 ul#monMenu li a.right{padding-right:19px;} 
 ul#monMenu li a:hover{color:#fdf1e5;background:#e06c08;} 
 ul#monMenu li a.current{color:#fdf1e5;background:#e06c08;} 
 ul#monMenu li a.current:hover{color:#fdf1e5;background:#e06c08;}
  #monEntete{width:100%;text-align:center;margin:auto;} 
  #contenuPage {width:100%;margin-top:10px;} 
  table.calc {width:20px;height:150px;margin:auto;border-spacing:0;border:10px solid #e06c08;} 
  table.calc td.ecran {padding:10px;background-color:#fdf1e5;border-bottom:5px solid #e06c08;} 
  table.calc td.boutons {padding:10px;background-color:#fdf1e5;border:0px;} 
  input.unBouton {width:40px;height:30px;text-align:center;font-family:System, sans-serif; font-size:22px;} 
  input.ecran {width:100%;height:30px;text-align:right;font-family:System, sans-serif; font-size:25px;} 
 
</style> 
</head> 
<body> 

  <div id="monEntete"> 
  <h2><img src="soleil.png" alt="logo du site" />Mon application Web 
            <img src="soleil.png" alt="logo du site" /></h2> 
</div> 
<div id="maDivMenu"> 
    <ul id="monMenu"> 
      <li><a href="index.php" title="Accueil"  
       <?php if (!isset($_GET['page'])) echo "class=\"current\""; ?> >    
           
      Accueil</a> 
       </li> 
      <li><a href="index.php?page=presentation" title="Présentation" 
      <?php if (isset($_GET['page'])) 
          if ($_GET['page']=="presentation") 
            echo "class=\"current\""; ?> > 
      Présentation</a> 
      </li> 
      <li><a href="index.php?page=articles" title="Articles" 
      <?php if (isset($_GET['page'])) 
        if ($_GET['page']=="articles") 
          echo "class=\"current\""; ?> > 
      Articles</a> 
      </li> 
      <li><a href="index.php?page=tutos" title="Tutos" 
      <?php if (isset($_GET['page'])) 
        if ($_GET['page']=="tutos") 
          echo "class=\"current\""; ?> > 
      Tutos</a> 
      </li> 
      <li><a href="index.php?page=forums" title="Forums" 
      <?php if (isset($_GET['page'])) 
        if ($_GET['page']=="forums") 
          echo "class=\"current\""; ?> > 
      Forums</a> 
      </li> 
      <li><a href="index.php?page=nous-contacter" title="Nous contacter" 
      <?php if (isset($_GET['page'])) 
        if ($_GET['page']=="nous-contacter") 
          echo "class=\"current\""; ?> > 
      Nous contacter</a> 

      </li> 
    </ul> 
  </div>