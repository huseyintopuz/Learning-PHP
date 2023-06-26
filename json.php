<?php

for ($i = 1; $i <= 10; $i++) {
    $data[] = [
        "title" => "Deneme" . $i,
        "description" => "Deneme Description" . $i
    ];
}

// echo json_encode($data);

$barn = [
    [
        "animal" => "bull",
        "count" => 10
    ],
    [
        "animal" => "sheep",
        "count" => 100
    ]
];

$names = [
    "ali",
    "veli",
    "kaan"
];
// echo json_encode($list);

 for ($i = 0; $i <= 2 ; $i++) {
    echo $names[$i].'<br>';
}
echo "<br>";

 foreach ($names as $key => $name) {
     //echo $key."-".$name."<br>"; // key starts from 0;
     echo ++$key."-".$name."<br>"; // key starts from 1;
}



