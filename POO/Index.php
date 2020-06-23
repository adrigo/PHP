<?php
    //Requiero los archivos de clase para incluirlos en este script
    require("Autobus.php");
    require("Furgoneta.php");
    require("Coche.php");

    //Instancio y configuro los vehículos
    $autobus = new Autobus("Volvo","9800 2017","gris","Mario","Desfufor");
    $furgoneta = new Furgoneta("Wolkswagen","Caravelle","blanco","Rebeca");
    $coche = new Coche("Toyota","Corolla","verde","Marcos");

    $aparcar = $coche->puedeAparcar("superficie") ? "si" : "no";
    echo "¿Puedo aparcar el coche en la superficie?: $aparcar\n";

    $aparcar = $coche->puedeAparcar("subterraneo2") ? "si" : "no";
    echo "¿Puedo aparcar el coche en el subterráneo 2?: $aparcar\n";
    
    $aparcar = $furgoneta->puedeAparcar("superficie") ? "si" : "no";
    echo "¿Puedo aparcar la furgoneta en la superficie?: $aparcar\n";

    $aparcar = $furgoneta->puedeAparcar("subterraneo2") ? "si" : "no";
    echo "¿Puedo aparcar la furgoneta en la subterráneo 2?: $aparcar\n";

    $aparcar = $autobus->puedeAparcar("superficie") ? "si" : "no";
    echo "¿Puedo aparcar la autobús en la superficie?: $aparcar\n";

    $aparcar = $autobus->puedeAparcar("subterraneo1") ? "si" : "no";
    echo "¿Puedo aparcar la autobús en la subterráneo 1?: $aparcar\n";

    $empresa = $autobus->getEmpresa();
    echo "¿A qué empresa pertenece el autobús?: $empresa\n";
