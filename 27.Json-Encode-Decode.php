<?php

$array = [
    'hewan_liar' => [
        'Serigala',
        'Singa',
        'Macam',
        'Beruang',
        'Ular'
    ]
];

//$object = json_encode($array);
$object = json_encode($array);
echo $object;

echo "<br />";

//$object = json_decode(json_encode($array));
$object = json_decode(json_encode($array));

foreach ($object->hewan_liar as $hewan) {
    echo $hewan;
    echo "<br>";
}
