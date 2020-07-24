<?php


namespace Fipps\NewsauthorBundle\Listener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class ParseTemplateListener implements ServiceAnnotationInterface
{
    /**
     * @Hook("parseTemplate", priority=0)
     *
     * @param \Template $objTemplate
     */
    public function onParseTemplate(\Template $objTemplate)
    {
        if (TL_MODE == 'FE' && isset($objTemplate->autho_ext) && $objTemplate->autho_ext !== '') {
            $author = $GLOBALS['TL_LANG']['MSC']['by'] . ' <span itemprop="author">' . $objTemplate->autho_ext . '</span>';
            $objTemplate->author = $author;
            return;
        }
    }
}