<?php

namespace Apsg\Pdfable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apsg\Pdfable\Pdfable
 */
class PdfableFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pdfable';
    }
}
