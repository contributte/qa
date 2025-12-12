<?php declare(strict_types = 1);

class GoodExample
{

	public function processData(array $data, string $key): mixed
	{
		return $data[$key] ?? null;
	}

	public function getProperty(object $object, string $propertyName): mixed
	{
		return $object->{$propertyName};
	}

	public function setValue(string $name, mixed $value): void
	{
		$values = [];
		$values[$name] = $value;
	}

	public function useRegularVariable(): string
	{
		$variable = 'value';
		return $variable;
	}

}
