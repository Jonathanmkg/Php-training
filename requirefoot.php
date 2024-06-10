<?php

require_once 'Footballteam.php';

$team1 = new Footballteam('TP Mazembe', 'lamine', 'lubumbashi');
$team2 = new Footballteam('Arsenal', 'Mikel arteta', 'london');

echo "Team 1 : " . $team1->getName() . "\n";
echo "Team 2 : " . $team2->getName() . "\n";