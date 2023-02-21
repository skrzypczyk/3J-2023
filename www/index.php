<?php
/*
 * Variable en Anglais
 * camelCase
 * Cohérence
 * Commence par un $
 */
/*
$firstname = "Yves";
$adult = true;
$age = 36;
$height = 1.86;
$average = null;
$firstname = 12;

// + - * / %
//Incrementation et décrementation
$counter = 0;
$counter = $counter + 1;
$counter += 1;
$counter++;
++$counter;

//Instruction echo : afficher
$counter = 0;
echo $counter;//0
echo $counter+1;//1
echo $counter++;//0
echo $counter;//1
echo --$counter;//0
echo ++$counter;//ERROR

// et logique : &&
$age = 32;
if($age == 18){
    echo "Tout juste majeur";
}elseif($age > 100 || $age < 10){
    echo "Menteur";
}elseif($age > 18){
    echo "Majeur";
}else{
    echo "Mineur";
}

$scope = "Admin";
switch ($scope){
    case "Admin":
        echo "Peut modifier la conf";
    case "Author":
        echo "Peut modifier le contenu";
    default:
        echo "Peut consulter le site";
        break;
}

//Condition ternaire
// une seule et meme instruction avec
//seulement un if et un else

$adult = true;

if($adult == true){
    echo "Afficher le site";
}else{
    echo "Ne pas afficher";
}
// instruction (condition)?vrai:faux;
echo ($adult)?"Afficher le site":"Ne pas afficher";

//null coalescent

if($test == null){
    echo "Default";
}else{
    echo $test;
}

echo $test??"Default";

//Boucles 4 :

$dice = rand(1,6);
$counter = 1;
while ($dice != 6){
    $dice = rand(1,6);
    $counter++;
}
echo $counter." tentatives";


$counter = 0;
do{
    $dice = rand(1,6);
    $counter++;
}while($dice !=6 );
echo $counter." tentatives";


for($counter = 0 ; $counter < 10 ; ++$counter ){
    echo $counter;
}



//$array = array("fraise", "cerise", "tomate");
$array = ["fraise", "cerise", "tomate"];

//echo $array;
echo "<pre>";
//var_dump($array);
//print_r($array);
echo "</pre>";

echo $array[1];

//Pomme
$array[]="Pomme";
echo "<pre>";
print_r($array);
echo "</pre>";

$student = [
                "lastname"=>"Michel",
                13,
                2=>14,
                "firstname"=>"Pierre",
                "average"=>12,
                15
            ];
// Prénom Nom a une moyenne de 12 / 20
echo $student["firstname"]." ".$student["lastname"]." a une moyenne de ".$student["average"]." / 20";


//Dimension

$class = [];//1D
$class = [
        []
];//2D
$class = [
            [],
            [
                []
            ]
        ];//3D



$class = [
              0=>[
                  0=>[0=>"Jeremy",1=>"Bruce"],
                  1=>"LY",
                  2=>17
              ],
              1=>[0=>"Johnny", 1=>'Chen', 2=>18],
        ]; //3D


echo $class[0][0][1];


$array = [
            [],
            1=>[
                [],
                [
                    [
                        []
                    ]
                ],
                2=>[
                    0=>[
                        0=>[
                            0=>[0=>"test"]
                        ]
                    ]
                ],
                []
            ]
        ];//6D


echo "<pre>";
print_r($array);
echo "</pre>";

$fruits = ["fraise", "cerise", "tomate"];


echo "<ul>";
foreach ($fruits as $key=>$fruit) {
    echo "<li>".$fruit."</li>";
}
echo "</ul>";


*/


$class = [
    ["firstname"=>"Reda","CC1"=>15,"CC2"=>12, "partiel"=>10],
    ["firstname"=>"Julien","CC1"=>14,"CC2"=>14, "partiel"=>12],
    ["firstname"=>"Célian","CC1"=>14,"CC2"=>14, "partiel"=>4],
    ["firstname"=>"Mike","CC1"=>12,"CC2"=>9, "partiel"=>13]
];

?>

<table>
    <tr>
        <th>Prénom</th>
        <th>Moyenne</th>
    </tr>
    <tr>
        <td>Reda</td>
        <td>10.33</td>
    </tr>
    <tr>
        <td>Reda</td>
        <td>10.33</td>
    </tr>
    <tr>
        <td>Reda</td>
        <td>10.33</td>
    </tr>
</table>

Le meilleur élève c'est Reda et le pire c'est Célian



