<?php

namespace Generator\Variable;

use Generator\Helper;

class DefaultHandler extends Handler
{
	public $handledPrefixes = ['cooldown_react'];

	public function handle($lexer, $variableParts, &$output)
	{
		$output[] = Helper::camelCase(implode('_', $variableParts));
	}
}