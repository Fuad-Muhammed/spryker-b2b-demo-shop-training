<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;

interface AntelopeClientInterface
{
    /**
     * @param GlueRequestTransfer $glueRequestTransfer
     *
     * @return AntelopeTransfer
     */
    public function getAntelope(GlueRequestTransfer $glueRequestTransfer): AntelopeTransfer;

}
