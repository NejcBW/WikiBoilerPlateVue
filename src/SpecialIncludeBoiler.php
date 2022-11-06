<?php

namespace MediaWiki\Extension\BoilerPlate;

use MWException;

class SpecialIncludeBoiler extends \IncludableSpecialPage
{

    public function __construct()
    {
        parent::__construct('IncludeBoiler');
    }

	/**
	 * Show the page
	 * @param string|null $subPage
	 * @throws MWException
	 */
    public function execute($subPage = null)
    {
        if ($this->including()) {
            $out = "I'm being included";
        } else {
            $out = "I'm being viewed as a Special Boiler Page";
            $this->setHeaders();
        }

        $this->getOutput()->addWikiTextAsInterface($out);
    }
}
