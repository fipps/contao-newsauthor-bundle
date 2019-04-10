<?php
/**
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

namespace Fipps\NewsauthorBundle\Module;


use Contao\NewsModel;

abstract class ModuleNews extends \Contao\ModuleNews
{

    /**
     * Return the meta fields of a news article as array
     *
     * @param NewsModel $objArticle
     *
     * @return array
     */
    protected function getMetaFields($objArticle) {
        $arrMeta = parent::getMetaFields($objArticle);
        if ($objArticle->autho_ext != '') {
            $arrMeta['author'] = $GLOBALS['TL_LANG']['MSC']['by'] . ' ' . $objArticle->autho_ext;
        }
        return $arrMeta;
    }
}