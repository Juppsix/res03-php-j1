<?php
$nb = 42;
echo $nb;
$str = '42';
echo $str;
// $nbstr = $nb; 
// echo $nbstr;
$nbstr = "$nb$str";
echo $nbstr;

$nb_tab = [42, 3.5];
print_r ($nb_tab);

$str_tab = ['700','1400','2800'];
print_r ($str_tab);

$animal = [
    "species" => "rat",
    "name" => "Billy",
    "age" => '70',
    ];
    print_r($animal);
    
    $data = '42';
    $float = (float) $data;
    $str = (string) $float;
    
    print_r($str);
    print_r($float);
    
    
$animals = ["Chat", "Chien", "Lapin", "Souris"];
    for($i = 0; $i < count($animals); $i++)
{
    echo "$animals[$i]";
    echo "<br>";
}

$numbers = [28, 32, 44, -67, 18, 24, -98];


for($i = 0; $i < count($numbers); $i++)
{
    if ($numbers[$i] < 0)
    {
        echo "$numbers[$i]";
        echo "<br>";
    }
}
$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
];
// $message_full = "$message World!";
// echo $user["firstName"];
$message = "Je suis {$user["firstName"]} {$user["lastName"]} le 44ème président des USA..";
echo "$message";
echo "<br>";

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];
for ($i = 0; $i < count($users); $i++)
{
    echo $users[$i]["firstName"]  . " " . $users[$i]["lastName"];
    echo "<br>";
    
}

?>