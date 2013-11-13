<?php

namespace carousel;

/**
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @license http://opensource.org/licenses/lgpl-3.0.html
 */
class SlideFactory {

    public static function save(Resource\Slide $slide)
    {
        \ResourceFactory::saveResource($slide);
    }

    public static function loadById($id)
    {
        $slide = new Resource\Slide;
        if ($id) {
            return \ResourceFactory::loadById($slide, $id);
        } else {
            return $slide;
        }
    }

}

?>
