<?php

declare(strict_types=1);

/*
 * This file is part of contao-responsive-tables-bundle.
 *
 * (c) Christian Romeni
 *
 * @license LGPL-3.0-or-later
 */

 $GLOBALS['TL_DCA']['tl_content']['fields']['responsivetableitems'] = array
    (
    'label' => &$GLOBALS['TL_LANG']['tl_content']['tableitems'],
    'inputType' => 'responsiveTableWizard',
    'eval' => array('allowHtml'=>true, 'doNotSaveEmpty'=>true, 'style'=>'width:142px;height:66px'),
    'xlabel' => array
    (
      array('tl_content', 'tableImportWizard')
    ),
    'sql' => "mediumblob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['tableResponsive'] = "'{type_legend},type,headline;{table_legend},responsivetableitems;{tconfig_legend},summary,thead,tfoot,tleft;{sortable_legend:hide},sortable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop";