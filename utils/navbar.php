<?php
function navbar (){
    ?>
     <nav>
            <ul>
                <li id="logo"><a href="#">JetLag</a></li>
                <li> <a href="#langue">Langue</a></li>
                <li> <a href="#voyages">Voyages</a></li>
                <li> <a href="#contact">Nous contacter</a></li>
                <form action="http://localhost/JetLag/index.php?action=recherche" method="POST">  
                
                
                    <input name="recherche" type="text">
                <button type="submit">
                    Soumettre
                </button>
                </form>
            </ul>
        </nav>
    <?php    
}
