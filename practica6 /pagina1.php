<?php
sleep(2);
if (isset($_GET['esport'])) {
    switch ($_GET['model']) {
        case 1:
            echo "<h2>Boost</h2>";
            echo "<p>Ja sigui que estiguis iniciant-te o tornant al tennis, o buscant un marc d'alt rendiment que sigui fàcil d'utilitzar, la Boost està feta per a tu.</p>";
            echo "<p>Inspirada directament de la raqueta de Rafael Nadal, la boost Rafa et permetrà fer rematades, deixades i cops guanyadors amb l'elegància d'un campió.</p>";
            echo "<p>Anem!</p>";
            echo "<img src='img/tenis1.jpg'>";
            break;
        case 2:
            echo "<h2>Pure Aero RAFA</h2>";
            echo "<p>Combativitat, resistència, fortalesa mental... ets com en Rafa! És hora de desafiar els teus oponents més durs amb aquesta Pure Aero, que amb el seu nom i colors acompanyarà el teu domini del joc a través del teu liftat i la teva potència.</p>";
            echo "<p>Lleugera, manejable i facilitant els cops d'efecte, la Pure Aero RAFA Lite és l'opció ideal per als jugadors júnior que usen la primera raqueta per a adults, o per a adults que busquen una raqueta fàcil d'usar.</p>";
            echo "<img src='img/tenis2.jpg'>";
            break;
        case 3:
            echo "<h2>Pure Strike</h2>";
            echo "<p>Res no es pot comparar amb la sensació d'enganxar a la bola exactament al punt precís que volies. Sent el rigorós control de la Pure Strike quan colpeges amb força i ple de confiança, marca les condicions del joc i manté tota la pressió del teu oponent.</p>";
            echo "<p>Amb la 3a generació de la Pure Strike, Babolat fa un pas endavant en el control del joc modern. Somnies amb aquesta sensació clàssica? El rigorós control de la Pure Strike ha estat dissenyat per satisfer les teves exigències com a jugador agressiu que li enganxa dur a la bola. Control dinàmic i pura sensació combinats per oferir una capacitat de resposta sense precedents per dominar la pista amb cada cop.</p>";
            echo "<p>La Pure Strike Team aporta control al teu joc amb una raqueta més lleugera i manejable.</p>";
            echo "<img src='img/tenis3.jpg'>";
            break;
    }
}

if (isset($_POST['esport'])) {
    switch ($_POST['model']) {
        case 1:
            echo "<h2>Technical Viper</h2>";
            echo "<p>Potència explosiva i precisió en els cops datac. És el que necessita l'atacant tècnic per dirigir el punt i marcar la diferència utilitzant la tècnica i la força.</p>";
            echo "<p>La Technical Viper es renova: mateixa jugabilitat amb un disseny exclusiu que fa cada pala única.</p>";
            echo "<p>Sigues un TECHNICAL STRIKER !!</p>";
            echo "<img src='img/padel1.jpg'>";
            break;
        case 2:
            echo "<h2>Counter Vertuo</h2>";
            echo "<p>Tots volem marcar punts… Tots som ATACANTS!</p>";
            echo "<p>La nostra observació del joc i dels jugadors ens ha portat a identificar diferents perfils de jugadors. Un d'ells, el contraatacant vol ser una muralla i controlar el joc amb paciència, tot esperant la bola perfecta per rematar.</p>";
            echo "<p>La Counter Vertuo ha estar desenvolupada amb la finalitat d'aportar la tolerància necessària per aguantar els cops dels adversaris i proporcionar una potència fàcil per acabar el punt.</p>";
            echo "<p>Intenta esgotar els teus adversaris amb la versió més tova d'aquesta nova generació de pales que t'animarà a capgirar el joc i ser un COUNTER STRIKER.</p>";
            echo "<img src='img/padel2.jpg'>";
            break;
        case 3:
            echo "<h2>Revenge Woman</h2>";
            echo "<p>Una pala de pàdel s'hauria d'adequar a les teves necessitats. És el que ens guia a Babolat quan desenvolupem una pala.</p>";
            echo "<p>La Revenge Woman, gràcies al pes lleuger i als materials tous, t'aportarà confort i potència sense esforç. És el que fa que estigui adaptada a tu, segons les nostres observacions i proves.</p>";
            echo "<p>Adopta-la i sent-te segura a la pista.</p>";
            echo "<img src='img/padel3.jpg'>";
            break;
    }
}
?>

