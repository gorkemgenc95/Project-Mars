<?php

require_once ( __DIR__.'/Surface.php' );

class Rover
{
	private string $_name;
	private int $_posX;
	private int $_posY;
	private string $_head;

	public function __construct(string $name, int $x, int $y, string $head)
	{
		$this->setName($name);
		$this->setPosX($x);
		$this->setPosY($y);
		$this->setHead($head);
	}

	public function getName(): string
	{
		return $this->_name;
	}

	public function getPosX(): int
	{
		return $this->_posX;
	}

	public function getPosY(): int
	{
		return $this->_posY;
	}

	public function getHead(): string
	{
		return $this->_head;
	}

	public function setName(string $name)
	{
		$this->_name = $name;
	}

	public function setPosX(int $x)
	{
		$this->_posX = $x;
	}

	public function setPosY(int $y)
	{
		$this->_posY = $y;
	}

	public function setHead(string $head)
	{
		$this->_head = $head;
	}

	public function move(Surface $surface)
	{
		switch ($this->getHead()) {
			case "N":
				$newPos = min ($this->getPosY() + 1, $surface->getSizeY());
				$this->setPosY($newPos);
				break;
			case "S":
				$newPos = max ($this->getPosY() - 1, 0);
				$this->setPosY($newPos);
				break;
			case "E":
				$newPos = min ($this->getPosX() + 1, $surface->getSizeX());
				$this->setPosX($newPos);
				break;
			case "W":
				$newPos = max ($this->getPosX() - 1, 0);
				$this->setPosX($newPos);
				break;
		}
	}

	public function turn(string $direction)
	{
		switch ($direction) {
			case "L":
				$this->turnLeft();
				break;
			case "R":
				$this->turnRight();
				break;
		}
	}

	private function turnLeft()
	{
		switch($this->getHead()) {
			case "N":
				$this->setHead("W");
				break;
			case "W":
				$this->setHead("S");
				break;
			case "S":
				$this->setHead("E");
				break;
			case "E":
				$this->setHead("N");
				break;
		}
	}

	private function turnRight()
	{
		switch($this->getHead()) {
			case "N":
				$this->setHead("E");
				break;
			case "E":
				$this->setHead("S");
				break;
			case "S":
				$this->setHead("W");
				break;
			case "W":
				$this->setHead("N");
				break;
		}
	}

}