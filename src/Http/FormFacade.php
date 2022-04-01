<?php

namespace VulcainTechnology\Form\Http;

use Illuminate\Support\Facades\Facade;

class FormFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    { return 'form'; }
}
