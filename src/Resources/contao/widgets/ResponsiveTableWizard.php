<?php

declare(strict_types=1);

/*
 * This file is part of contao-responsive-tables-bundle.
 *
 * (c) Christian Romeni
 *
 * @license LGPL-3.0-or-later
 */

namespace Rwd\ContaoResponsiveTablesBundle;

class ResponsiveTableWizard extends TableWizard
{
    public function generate()
    {
		$arrColButtons = array('ccopy', 'cmovel', 'cmover', 'cdelete');
		$arrRowButtons = array('rcopy', 'rdelete', 'rdrag');

		// Make sure there is at least an empty array
		if (empty($this->varValue) || !\is_array($this->varValue))
		{
			$this->varValue = array(array(''));
		}

		// Begin the table
		$return = '<div id="tl_tablewizard">
  <table id="ctrl_' . $this->strId . '" class="tl_tablewizard">
  <thead>
    <tr>';

		// Add column buttons
		for ($i=0, $c=\count($this->varValue[0]); $i<$c; $i++)
		{
			$return .= '
      <td>';

			// Add column buttons
			foreach ($arrColButtons as $button)
			{
				$return .= ' <button type="button" data-command="' . $button . '" class="tl_tablewizard_img" title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_' . $button]) . '">' . Image::getHtml(substr($button, 1) . '.svg') . '</button>';
			}

			$return .= '</td>';
		}

		$return .= '
      <td><i>test</i></td>
    </tr>
  </thead>
  <tbody class="sortable">';

		// Add rows
		for ($i=0, $c=\count($this->varValue); $i<$c; $i++)
		{
			$return .= '
    <tr>';

			// Add cells
			for ($j=0, $d=\count($this->varValue[$i]); $j<$d; $j++)
			{
				$return .= '
      <td class="tcontainer"><textarea name="' . $this->strId . '[' . $i . '][' . $j . ']" class="tl_textarea noresize" rows="' . $this->intRows . '" cols="' . $this->intCols . '"' . $this->getAttributes() . '>' . StringUtil::specialchars($this->varValue[$i][$j] ?? '') . '</textarea></td>';
			}

			$return .= '
      <td>';

			// Add row buttons
			foreach ($arrRowButtons as $button)
			{
				if ($button == 'rdrag')
				{
					$return .= ' <button type="button" class="drag-handle" title="' . sprintf($GLOBALS['TL_LANG']['MSC']['move']) . '" aria-hidden="true">' . Image::getHtml('drag.svg') . '</button>';
				}
				else
				{
					$return .= ' <button type="button" data-command="' . $button . '" class="tl_tablewizard_img" title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_' . $button]) . '">' . Image::getHtml(substr($button, 1) . '.svg') . '</button>';
				}
			}

			$return .= '</td>
    </tr>';
		}

		$return .= '
  </tbody>
  </table>
  </div>
  <script>Backend.tableWizard("ctrl_' . $this->strId . '")</script>';

		return $return;
        
    }
}