<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert
 * @license  : LGPL 3.0+
 */

namespace Fipps\NewsauthorBundle\Listener;


class HooksListener
{
    /**
     * sets a new alias for ModuleNews
     */
    public function onInitializeSystem() {
        class_alias('Fipps\NewsauthorBundle\Module\ModuleNews', 'ModuleNews');
    }
}