<?php

namespace MobSoft\MockNames;

trait Common
{
	public static function generate(): string
	{
		$animal    = self::$animals[array_rand(self::$animals, 1)];
		$adjective = self::$adjectives[array_rand(self::$adjectives, 1)];

		return $adjective . '-' . $animal;
	}
}