<?php

require_once __DIR__ . "/vendor/autoload.php";

use ProjectMars\Surface;
use ProjectMars\Rover;
use ProjectMars\Actions;

const ROVER_A = "Spirit";
const ROVER_B = "Opportunity";

function main(): bool
{
	echo "Input:" . PHP_EOL;
	// Get surface size
	$surfaceSize = getMultiInputFromUser(2);
	$plateau = new Surface($surfaceSize[0], $surfaceSize[1]);

	// Get rover A position and actions
	$rover = getMultiInputFromUser(3);
	$roverA = new Rover(ROVER_A, $rover[0], $rover[1], $rover[2]);
	$actionsA = readline();

	// Get rover B position and actions
	$rover = getMultiInputFromUser(3);
	$roverB = new Rover(ROVER_B, $rover[0], $rover[1], $rover[2]);
	$actionsB = readline();

	// Execute the actions of the first rover
	Actions::execute($plateau, $roverA, $actionsA);
	// Execute the actions of the second rover
	Actions::execute($plateau, $roverB, $actionsB);

	return true;
}

function getMultiInputFromUser(int $count): array
{
	$input = readline();
	$input = explode(" ", $input);
	if (count($input) !== $count) {
		exit("Input parameters are wrong.");
	}
	return $input;
}

return main();