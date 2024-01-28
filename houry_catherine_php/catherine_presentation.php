<?php 
require "config.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Catherine_Presentation.css">
    <link rel="stylesheet" href="Contenus multimédia/Blogh.otf">

    <title>Document</title>
</head>
<body>
    <header class=
    <?php 
                        if($header['couleur'] == 'vert') {
                                echo 'header-vert';
                            }
                            
                            if($header['couleur'] == 'rouge') {
                                echo 'header-rouge';}

                                if($header['couleur'] == 'bleu') {
                                    echo 'header-bleu';
                                }
                            ?>>
 

            <nav >

                <div class="topheader"  >


                            <?php 
                            echo  $header['titre'];
                            
                            ?>
                    
                        <a href="" class="headerWEART">
                       
                            
                             </a>
                    
                        
                    <ul class="prenoms">
                    <?php
                            foreach ($header['prenoms'] as $prenom) {
                                echo  $prenom ;
                            }

                          ?>
                        <!-- <li> <a href="" class="Dylan">DYLAN </a> </li>
                        <li> <a href="" class="Catherine">CATHERINE</a> </li> -->
                    
                    </ul>
                </div>

               

                <ul class="cathegorie">
                    <li > <a class="presentation" href="">PRESENTATION</a>  </li>
                    <li> <a href="catherine_production.html">PRODUCTION</a>  </li>
                    <li> <a href="">INSPIRATION</a>  </li>
                </ul>
    
            </nav>

       

        
     


    </header>


    <main class= <?php  if($organisation['div'] == 'inverser') {
                                echo 'inverser';} 
                                
                                if($main['arriere-plan'] == 'turquoise') {
                                    echo 'arriere-plan_turquoise';
                                }
                                
                                if($main['arriere-plan'] == 'rose') {
                                    echo 'arriere-plan_rose';
                                }
    
                                if($main['arriere-plan'] == 'bleu') {
                                    echo 'arriere-plan_bleu';
                                }?>>

        <div class="maintop <?php if($texte['police'] == 'serif') {
                                    echo 'police_serif';}
                                    
                                    if($texte['police'] == 'sans-serif') {
                                        echo 'police_sans-serif';}    ?> ">


            <p class="biographie <?php if($texte['couleur'] == 'violet') {
                                echo 'texte-violet';
                            }
                            
                            if($texte['couleur'] == 'blanc') {
                                echo 'texte-blanc';}

                                if($texte['couleur'] == 'orange') {
                                    echo 'texte-orange';
                                }  
                                   

                                
                        
                            
                                
                                
                                
                                
                                
                                ?>">
            
            <?php 
                           
                            
                        
                                echo  $texte['presentation'];
                            
                             ?>
           </p>

           <img class="fillemer" src="Contenus multimédia/moi statue.jpg" alt="">

        </div>

        <div class="endmain <?php if($texte['police'] == 'serif') {
                                    echo 'police_serif';}
                                    
                                    if($texte['police'] == 'sans-serif') {
                                        echo 'police_sans-serif';}    ?>">

            <p class="avis <?php  if($texte['couleur'] == 'violet') {
                                echo 'texte-violet';
                            }
                            
                            if($texte['couleur'] == 'blanc') {
                                echo 'texte-blanc';}

                                if($texte['couleur'] == 'orange') {
                                    echo 'texte-orange';} 
                                     ?>">
                
            <?php 
                            echo  $texte['avis'];
                            
                             ?>
           </p>
                
            </p>

            <img class="imgbateau 
            
            <?php/* if($img['img1'] == 'petite') { echo 'img1_petite';}
                   if($img['img1'] == 'moyenne') { echo 'img1_moyenne';}
                    if($img['img1'] == 'grande') { echo 'img1_grande';}*/?> "
             src ="Contenus multimédia/moi cathédrale.jpg" alt="">
        

        </div>

       

       
       

       

    </main>



    <footer class="<?php   
                        if($footer['couleur'] == 'vert') {
                                echo 'footer-vert';
                            }
                            
                            if($footer['couleur'] == 'rouge') {
                                echo 'footer-rouge';}

                                if($footer['couleur'] == 'bleu') {
                                    echo 'footer-bleu';
                                }
                            ?>">
            <nav>
                <a href=""> <?php echo  $footer['phrase']; ?> </a>

            </nav>
               
            
           
        
    </footer>

    <nav> </nav>
    <video src=""></video>
    
    
</body>
</html>