<?php

Class Surface
{
	private int $_sizeX;
	private int $_sizeY;

	public function __construct(int $x, int $y)
	{
		$this->setSizeX($x);
		$this->setSizeY($y);
	}

	public function getSizeX(): int
	{
		return $this->_sizeX;
	}

	public function getSizeY(): int
	{
		return $this->_sizeY;
	}

	public function setSizeX($x)
	{
		$this->_sizeX = $x;
	}

	public function setSizeY($y)
	{
		$this->_sizeY = $y;
	}
}