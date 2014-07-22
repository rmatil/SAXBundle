<?php

namespace RaiseNow\SaxBundle;

use Sax\Sax;

class SaxFactory {

    private $defaultAlphabetSize;

    public function __construct( $pDefaultAlphabetSize = 5 ) {
        $this->defaultAlphabetSize = $pDefaultAlphabetSize;
    }

    public function getSaxInstance( array $pReferenceTimeSeries, array $pAnalysisTimeSeries, $pAlphabetSize = null) {
        return new Sax( $pReferenceTimeSeries, $pAnalysisTimeSeries, is_int( $pAlphabetSize ) ? $pAlphabetSize : $this->defaultAlphabetSize );
    }
}


?>