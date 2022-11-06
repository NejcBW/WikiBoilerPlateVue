<?php

namespace MediaWiki\Extension\BoilerPlate;

use SpecialPage;
use TemplateParser;
use Html;

class SpecialBoiler extends SpecialPage {

	public function __construct() {
		parent::__construct( 'Boiler' );
	}

	public function execute( $subPage ) {

		$this->setHeaders();
		$this->outputHeader();
		$out = $this->getOutput();
		$out->setPageTitle( 'SpecialBoiler' );
		$out->addModules( 'ext.boilerPlate' );

		$tp = new TemplateParser( __DIR__ . '/templates' );
		$html = $tp->processTemplate( 'Boiler', [] );

		$out->addHTML( $html );

	}

	protected function getGroupName(): string {
		return 'other';
	}
}