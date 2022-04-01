<?php

namespace VulcainTechnology\Form\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FormController
{
    /**
     * @param array $options
     * @return Factory|View|Application
     */
    public function input(array $options): Factory|View|Application
    {
        if(!$options['type']) $options['type'] = "text";

        if(!$options['name']) abort(449, "An input must have name property.");

        return view('views.input', compact('options'));
    }
}
