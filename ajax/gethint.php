<?php
// Array with names
$a[] = "fortnite";
$a[] = "counterstrike";
$a[] = "pubg";
$a[] = "H1Z1";
$a[] = "far cry 5";
$a[] = "far cry 4";
$a[] = "far cry 3";
$a[] = "far cry classic";
$a[] = "The witcher";
$a[] = "Destiny 2";
$a[] = "Escape from tarkov";
$a[] = "rocket league";
$a[] = "GTA IIV";
$a[] = "GTA IV";
$a[] = "GTA V";
$a[] = "minecraft";
$a[] = "arma 2";
$a[] = "arma 3";
$a[] = "fallout 4";
$a[] = "ark survival evolved";
$a[] = "dota 2";
$a[] = "outlast";
$a[] = "leage of legends";
$a[] = "left for dead 2";
$a[] = "starwars battlefront";
$a[] = "stick fight the game";
$a[] = "Rainbow six siege";
$a[] = "tom clancys wildlands";
$a[] = "terraria";
$a[] = "stellaris";
$a[] = "space engineers";
$a[] = "stardew valley";
$a[] = "civ 5";
$a[] = "civ 6";
$a[] = "rust";
$a[] = "gmod";
$a[] = "portal 2";
$a[] = "unturned";
$a[] = "tom clancys phantoms";
$a[] = "seven days to die";
$a[] = "astroneer";
$a[] = "dying light";
$a[] = "dark souls";
$a[] = "FTL";
$a[] = "The crew";
$a[] = "just cause 2";
$a[] = "just cause 3";
$a[] = "The crew 2";
$a[] = "company of heroes";
$a[] = "heroes and generals";
$a[] = "battleblock theater";
$a[] = "city:skylines";
$a[] = "castle crashers";
$a[] = "factorio";
$a[] = "subnautica";
$a[] = "insurgency";
$a[] = "five nights at freddies";
$a[] = "warhammer";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
