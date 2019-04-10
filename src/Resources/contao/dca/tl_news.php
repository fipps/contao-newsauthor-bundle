<?php
/**
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('author', 'autho_ext, author', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);


$GLOBALS['TL_DCA']['tl_news']['fields']['author']['eval']['tl_class'] = 'w50';
$GLOBALS['TL_DCA']['tl_news']['fields']['alias']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_news']['fields']['autho_ext'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_news']['autho_ext'],
    'inputType' => 'text',
    'sql'       => "varchar(128) NOT NULL default ''",
    'eval'      => array('tl_class' => 'clr w50',
                         'maxlength'=>128),
);