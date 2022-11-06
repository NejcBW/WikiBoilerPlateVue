<?php

namespace MediaWiki\Extension\BoilerPlate;

use MediaWiki\Page\PageReference;
use MWException;
use Parser;
use PPFrame;
use Html;

class Tags {
	/**
	 * @throws MWException
	 */
	public static function onParserFirstCallInit( Parser $parser ) {

		$parser->setHook( 'sample2', [ self::class, 'renderTagSample' ] );
	}

	public static function renderTagSample( $input, array $args, Parser $parser, PPFrame $frame
	): string {
		$out = $parser->getOutput();
		$out->addModules( [ 'ext.boilerPlate' ] );

		return Html::rawElement('div',['id'=>'my-test-component']);
	}
}
