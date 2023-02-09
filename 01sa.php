<table align = "center">
    <tbody>

    <?php

#Practice 4-01
$team = array(
print "Practice 4-01";
        print "<table>";
        print "<table border = 1><tr><th>id</th><th>species</th><th>type1</th><th>type2</th><th>ability</th><th>hp</th><th>attack</th><th>defense</th></tr>";
        foreach($team as $a){
        print "<tr><th>". $a['id'] . "</th><th>" . $a['species'] . "</th><th>" . $a['type1'] . "</th><th>" . $a['type2'] . "</th><th>" . $a['ability'] . "</th><th>" . $a['hp'] . "</th><th>" . $a['attack'] . "</th><th>" . $a['defense'] . "</th></tr>";
        }
        print "</table><br>";
        $Myfavorite = $team[6]['species'];
        print "My Favorite Specie: " . $Myfavorite."<br>";

        echo "All species in the list: <br>";
    foreach ($team as $species) {
        echo $species['species'] . "<br>";