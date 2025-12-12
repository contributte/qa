<?php declare(strict_types = 1);

enum Status
{

	case Active;
	case Inactive;

	case Pending;

}

enum Color: string
{

	case Red = 'red';
	case Green = 'green';
	case Blue = 'blue';

}
