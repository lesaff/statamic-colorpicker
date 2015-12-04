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
        $addon_name = $this->getAddonClassName();
        $addon_path = Path::makeRelative(addons_path($addon_name));
        $html = '<link rel="stylesheet" href="/' . $addon_path . '/css/jquery.minicolors.css">';
        return $html;
    }

}