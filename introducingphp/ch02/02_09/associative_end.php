<?php
$descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android'
];

$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

echo $descriptions['Earth'] . "<br/>";
echo $descriptions['Marvin'] . "<br/>";

//print_r($descriptions);

echo "Earth is described as {$descriptions['Earth']}.";