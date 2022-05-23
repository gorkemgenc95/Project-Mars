<?php

namespace ProjectMars\Test;

use PHPUnit\Framework\TestCase;
use ProjectMars\Rover;

class RoverTest extends TestCase
{
	const ROVER_A = "Spirit";
	const ROVER_B = "Opportunity";

	protected Rover $rover;

	protected function setUp(): void
	{
		$this->rover = new Rover(self::ROVER_A, 2, 2, "N");
	}

	//TODO:: write test cases
}