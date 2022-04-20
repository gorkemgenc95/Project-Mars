<?php

namespace ProjectMars;

class Actions
{
	public static function execute(Surface $surface, Rover $rover, string $input): bool
	{
		// Check if the rover has successfully landed to the area
		if (!self::isLandingSuccessful($rover, $surface)) {
			echo "{$rover->getName()} could not land to the area." . PHP_EOL;
			return false;
		}

		// Execute commands
		$commands = explode(" ", $input);
		foreach ($commands as $command) {
			switch ($command) {
				case "M":
					$rover->move($surface);
					break;
				case "L":
				case "R":
					$rover->turn($command);
					break;
				default:
					// Unknown command
					break;
			}
		}

		// Print last location
		echo $rover->getPosX() . " " . $rover->getPosY() . " " . $rover->getHead() . PHP_EOL;
		return true;
	}

	private static function isLandingSuccessful(Rover $rover, Surface $surface): bool
	{
		if ($rover->getPosX() > $surface->getSizeX() || $rover->getPosX() < 0 ||
			$rover->getPosY() > $surface->getSizeY() || $rover->getPosY() < 0) {
			return false;
		}
		return true;
	}

}