<?php declare(strict_types = 1);

enum Status:string
{

	case Active = 'active';
	case Inactive = 'inactive';

}

enum Priority :int
{

	case Low = 1;
	case Medium = 2;
	case High = 3;

}
