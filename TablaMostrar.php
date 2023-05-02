<?php
include "index.html";

if (file_exists('carta.xml')) {
    $platos = simplexml_load_file('carta.xml');
} else {
    alert('error al conectar con el archivo');
}
?>
<div class="contenedor-comida">
<?php
if(isset($_POST['entrantes'])){
    /* Mostramos los entrantes */
    foreach ($platos->entrante as $entrante) {
        echo "<div class='comida-titulo'>";
        echo "<h6 id='1'>" .$entrante->title. "</h6>";
        echo "</div>";
        echo "<div class='comida-imagen'>";
        echo '<img src="' .$entrante->imagen. '">';
        echo "</div>";
        echo "<div class='comida-Precio'";
        echo "<p> Precio: " .$entrante->precio. "</p>";
        echo "</div>";
        echo "<div class='comida-description'>";
        echo "<p>" .$entrante->description. " " .$entrante->cal."</p>";
        foreach($entrante->ingredientes as $icon){
            if($icon == "con gluten") {
                echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
            }
            if($icon == "pescado") {
                echo '<i class="fa-solid fa-fish"></i>';
            }
            if($icon == "carne"){
                echo '<i class="fa-solid fa-drumstick-bite"></i>';
            }
            if($icon == "vegetal"){
                echo '<i class="fa-solid fa-plant-wilt"></i>';
            }
        }
        echo "</div>";
    
    }
} elseif(isset($_POST['paellas'])) {
    /* Mostramos los primeros */
    foreach ($platos->primero->multititles as $primero) {
        echo "<div class='comida-titulo'>";
        echo "<h6 id='2'>" .$primero->opcion. "</h6>";
        echo "</div>";
        echo "<div class='comida-imagen'>";
        echo '<img src="' .$primero->imagen. '">';
        echo "</div>";
        echo "<div class='comida-Precio'";
        echo "<p> Precio: " .$primero->precio. "</p>";
        echo "</div>";
        echo "<div class='comida-description'>";
        echo "<p>" .$primero->description. " " .$primero->cal."</p>";
        foreach($primero->ingredientes as $icon){
            if($icon == "con gluten") {
                echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
            }
            if($icon == "pescado") {
                echo '<i class="fa-solid fa-fish"></i>';
            }
            if($icon == "carne"){
                echo '<i class="fa-solid fa-drumstick-bite"></i>';
            }
            if($icon == "vegetal"){
                echo '<i class="fa-solid fa-plant-wilt"></i>';
            }
        
        }
        echo "</div>";
    
        
    }
} elseif(isset($_POST['hamburguesas'])) {
    /* Mostramos los segundos */
    foreach ($platos->segundo->multititles as $segundo) {
        echo "<div class='comida-titulo'>";
        echo "<h6 id='3'>" .$segundo->opcion. "</h6>";
        echo "</div>";
        echo "<div class='comida-imagen'>";
        echo '<img src="' .$segundo->imagen. '">';
        echo "</div>";
        echo "<div class='comida-Precio'";
        echo "<p> Precio: " .$segundo->precio. "</p>";
        echo "</div>";
        echo "<div class='comida-description'>";
        echo "<p>" .$segundo->description. " " .$segundo->cal."</p>";
        foreach($segundo->ingredientes as $icon){
        if($icon == "con gluten") {
            echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
        }
        if($icon == "pescado") {
            echo '<i class="fa-solid fa-fish"></i>';
        }
        if($icon == "carne"){
            echo '<i class="fa-solid fa-drumstick-bite"></i>';
        }
        if($icon == "vegetal"){
            echo '<i class="fa-solid fa-plant-wilt"></i>';
        }
    }
        echo "</div>";
    
        
    }
} elseif(isset($_POST['postres'])) {
    /* Mostramos los postres */
    foreach ($platos->postre->multititles as $postre) {
        echo "<div class='comida-titulo'>";
        echo "<h6 id='3'>" .$postre->opcion. "</h6>";
        echo "</div>";
        echo "<div class='comida-imagen'>";        
        echo '<img src="' .$postre->imagen. '">';
        echo "</div>";
        echo "<div class='comida-Precio'";
        echo "<p> Precio: " .$postre->precio. "</p>";
        echo "</div>";
        echo "<div class='comida-description'>";
        echo "<p>" .$postre->description. " " .$postre->cal."</p>";
        foreach($postre->ingredientes as $icon){
        if($icon == "con gluten") {
            echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
        }
        if($icon == "pescado") {
            echo '<i class="fa-solid fa-fish"></i>';
        }
        if($icon == "carne"){
            echo '<i class="fa-solid fa-drumstick-bite"></i>';
        }
        if($icon == "vegetal"){
            echo '<i class="fa-solid fa-plant-wilt"></i>';
        }
    }
        echo "</div>";
    
        
    }
} elseif(isset($_POST['refrescos'])) {
    /* Mostramos las bebidas */
    foreach ($platos->bebida->multititles as $bebida) {
        echo "<div class='comida-titulo'>";
        echo "<h6 id='5'>" .$bebida->opcion. "</h6>";
        echo "</div>";
        echo "<div class='comida-imagen'>";        
        echo '<img src="' .$bebida->imagen. '">';
        echo "</div>";
        echo "<div class='comida-Precio'";
        echo "<p> Precio: " .$bebida->precio. "</p>";
        echo "</div>";   
        echo "<div class='comida-description'>";
        echo "<p>" .$bebida->description. " " .$bebida->cal."</p>";
        foreach($bebida->ingredientes as $icon){
            if($icon == "con gluten") {
                echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
            }
            if($icon == "pescado") {
                echo '<i class="fa-solid fa-fish"></i>';
            }
            if($icon == "carne"){
                echo '<i class="fa-solid fa-drumstick-bite"></i>';
            }
            if($icon == "vegetal"){
                echo '<i class="fa-solid fa-plant-wilt"></i>';
            }
        
        }
        echo "</div>";
    
    
        
}
}
?>
</div>
    
</body>
</html>
