<?php

namespace Statamic\Addons\Colorpicker;

use Statamic\API\Path;
use Statamic\Extend\Listener;

class ColorpickerListener extends Listener
{
    public $events = [
        'cp.add_to_head' => 'initColorpicker'
    ];

    public function initColorpicker()
    {
        $addon_css = $this->css->url('jquery.minicolors.css');
        $html = '<link rel="stylesheet" href="' . $addon_css . '">';
        return $html;
    }

}