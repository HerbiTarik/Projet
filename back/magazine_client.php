<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c79ef9f9bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap');
        </style>
      <style type="text/css">
    .magazine{
    margin: 40px 5%;
    position: relative;
    }
    .magazine .magazine_titre{
    border-bottom: 1px solid #bfb4b4;
    color: #24262b;
    }
    .magazine_a_b{
    display: flex;
    padding-top: 30px;
    justify-content: space-evenly;
}
.magazine_a{
    display:flex;
    padding: 0 20px 0 0;
    width: 60%;
    flex-direction: column;
}
.magazine_corps_a img{
    width:100%;
    height:400px;
    border-radius:5px;
}
.magazine_corps_a p{
    padding-top: 10px;
    font-size: 16px;
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_a h2{
    color: #24262b;
    letter-spacing: 0.6px;
    line-height: 25px;
}
.magazine_corps_a h3{
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_b{
    display:flex;
    padding: 0 20px 0 0;
    width: 40%;
    flex-direction: column;
}
.magazine_b img{
    width:100%;
    height:350px;
    border-radius:5px;
}
.magazine_b h2{
    color: #24262b;
    letter-spacing: 0.6px;
    line-height: 25px;
}
.magazine_b h3{
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
.magazine_b p{
    padding-top: 10px;
    font-size: 16px;
    letter-spacing: 0.6px;
    line-height: 25px;
    color: #24262b;
}
@media(max-width:800px){
        .magazine_a_b{
            flex-direction: column;
        }
        .magazine_a{
            width: 100%;
        }
        .magazine_b{
            width: 100%;
        }
    }
    </style>
    <title>Beaut?? Melly</title>
</head>
<body>

    <!--header-->

    <header>
    
    <div class="logo"><a href="client.php">Beaut??Melly</a></div>
   
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-bars"></i>
    </label>

    <ul class="menu">
    <li id="left"><a href="client.php"><i class="fas fa-home"></i><strong> Acceuil</strong></a></li>
        <li id="left"><a href="produit_client.php"><i class="fas fa-shopping-bag"></i><strong> Produits</strong></a></li>
        <li id="left"><a href="marque_client.php"><i class="far fa-gem"></i><strong> Marques</strong></a></li>
        <li id="left"><a href="magazine_client.php"><i class="far fa-newspaper"></i><strong> Magazine</strong></a></li>
        
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        
    </ul>
    <ul class="profile">
    <li><a href="logout.php"><strong>D??connexion</strong></a></li>
    </ul>
</header>

<nav class="navbarre">
            <div class="divsearch">
            <div class="search">
                 <input class="search-txt" type="text" name="box" placeholder="Rechercher un produit...">
                 <a  class="search-btn"href="#"><i class="fas fa-search"></i></a>
            </div>
        </div>
       </nav>
   
<!------------------magazine--------------------------->
<div class="magazine">
<h1 class="magazine_titre">Magazine</h1>

<div class="magazine_a_b">

    <div class="magazine_a">
        <h2><font color="#fab1a0">Le top des soins pour prot??ger et r??parer ses cheveux en ??t??</font></h2><br>
        <div class="magazine_corps_a">
            <h3>Chaleur, rayons UV, humidit??, sel, chlore, sable... Tant de facteurs qui peuvent abimer les cheveux pendant nos vacances au soleil. Voici notre s??lection des meilleurs produits capillaires pour prendre soin de sa chevelure cet ??t??.</h3><br>
            <img src="../image/ch.jpg"><br><br>
            <p>L'??t??, nos cheveux sont mis ?? rude ??preuve. Pour <strong><font color="#fab1a0">pr??venir du dess??chement de la fibre capillaire</font></strong> d?? au soleil et <strong><font color="#fab1a0">pr??server la vitalit?? de notre</font> </strong>, il est important de renforcer sa routine beaut?? avec des produits protecteurs et r??parateurs adapt??s. <br>
            <br>
            <strong><font color="#fab1a0">Comment prot??ger ses cheveux en ??t?? ?</font></strong><br><br>Les rayons UV nocifs du soleil, le chlore de la piscine, le sable ou l'humidit?? impactent la qualit?? de notre cheveu et peuvent le rendre plus sec, d??shydrat??, voire cassant. Les t??tes color??es ou m??ch??es doivent redoubler d'attention car le soleil peut ternir la couleur et l'??clat des cheveux. Heureusement, il existe quelques gestes simples ?? combiner avec des produits efficaces pour entretenir sa chevelure pendant ses vacances au soleil.
            <br><br>
            <strong><font color="#fab1a0">L'huile ou le spray capillaire :</font></strong> Id??al pour prot??ger ses cheveux pendant et apr??s l'exposition au soleil, il agit comme un bouclier face aux mauvais rayons UV tout en hydratant la fibre capillaire. Il permet aussi d'??viter les frisottis et les m??ches rebelles dus ?? l'humidit??. Les ingr??dients ?? privil??gier ? Les huiles v??g??tales (de coco, de mono??, d'argan...). Certains produits plus experts poss??dent m??me une petite protection SPF non n??gligeable. <br><br>
            <strong><font color="#fab1a0">Le shampooing apr??s-soleil :</font></strong> C'est l'??tape ?? ne pas zapper pour se d??barrasser de toutes les impuret??s et r??sidus qui emp??chent le cuir chevelu de respirer et abiment les longueurs (comme le sel, le chlore, la transpiration ou les restes d'huiles capillaires). Ils peuvent ??tre utilis??s apr??s chaque journ??e de baignade. Pour bien d??m??ler et r??hydrater les cheveux, il est conseill?? d'appliquer ensuite un apr??s-shampooing de la m??me gamme. <br><br>
            <strong><font color="#fab1a0">Le masque apr??s-soleil :</font></strong> Une fois par semaine, un soin plus intense est indispensable pour r??parer et nourrir en profondeur les longueurs. Le masque capillaire leur apporte douceur, ??clat et r??confort apr??s plusieurs jours d'exposition au soleil.
        </p><br><br>
        <h2><font color="#fab1a0">Maquillage : inspirations, conseils et shopping pour se maquiller</font></h2><br>
        <h3>Envie d'un joli maquillage naturel ou glamour ? Suivez les tutos et astuces de pro pour r??aliser un make-up facile et qui en jette, au quotidien comme pour une occasion.</h3><br><br>
        <img src="../image/ma.jpg"><br><br>
        <p>Le  <strong><font color="#fab1a0">maquillage</font></strong> est l'atout essentiel pour sublimer le visage. Rouge ?? l??vres, fard ?? paupi??re, mascara... Les marques de cosm??tiques ne cessent d'innover pour nous proposer un choix de textures et de couleurs irr??sistibles. Au fil des saisons, des tendances maquillage ??mergent et certaines deviennent intemporelles. Ainsi, le nude, la bouche rouge ou encore le smoky eye font d??sormais partie des techniques de maquillage incontournables qui se portent ?? toutes les occasions.</p>
        </div>
    </div>

    <div class="magazine_b">
    <h2><font color="#fab1a0">TOP DES COIFFURES DE STARS</font></h2>
    <p><strong>Kate Middleton</strong></p><br>
    <img src="../image/ka.jpg"><br>
    <p>?? chacune de ses apparitions, l'??pouse du Prince William attire tous les regards. Depuis son plus jeune ??ge, Kate Middleton porte les cheveux longs qu'elle sublime en r??alisant chignon, boucles et queue de cheval. Sur le tapis rouge, elle privil??gie souvent les cheveux l??ch??s et les ondulations sur les longueurs avec une raie au milieu ou sur le c??t??.</p><br><br>
    <p><strong>C??line Dion</strong></p><br>
    <img src="../image/ce.jpg"><br>
    <p>V??ritable Cam??l??on, la diva adore changer de t??te. C??t?? cheveux, elle a tout os??. Cheveux courts, longs, boucl??s, carr??, blond, bruns... Elle n'a jamais eu peur de tenter une nouvelle coiffure. (Re) d??couvrez les tops et flops capillaires de C??line Dion. </p><br><br>
    <p><strong>Brigitte Macron</strong></p><br>
    <img src="../image/br.jpeg"><br>
    <p>La premi??re dame a fait de son carr?? blond une r??f??rence. Toujours impeccable, Brigitte Macron ne se laisse aller ?? aucune extravagance. Seules fantaisies, qu'elle s'accorde parfois, un chignon ou une demi queue-de-cheval. qui  lui vont ?? ravir.  </p>
</div>
</div>

</div>

   <?php include("footer.php"); ?>

</body>
</html>