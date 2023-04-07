<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Liste déroulante villes</title>
    </head>

    <body>
        <?php
          $tCps = array("75011", "75012", "13000", "59000", "69000");
          $tVilles = array("Paris XI", "Paris XII", "Marseille", "Lille", "Lyon");
        ?>
        <form method="get" action="">
            <select name='listeVilles' >
                <?php
                  for ($i = 0; $i < count($tCps); $i++) {
                    echo "<option value='" . $tCps[$i] . "'>$tVilles[$i]</option>\n";
                  }
                ?>
            </select>
            <input type="submit" />
        </form>
        <?php
        $cp = filter_input(INPUT_GET, "listeVilles");
        if ($cp != null) {
            echo "Option sélectionnée : " . $cp;
        }
        ?>
    </body>
</html>