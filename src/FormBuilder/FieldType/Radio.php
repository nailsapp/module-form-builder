<?php

/**
 * This class provides the "Radio" field type
 *
 * @package     Nails
 * @subpackage  module-form-builder
 * @category    Controller
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\FormBuilder\FormBuilder\FieldType;

use Nails\Factory;
use Nails\FormBuilder\FieldType\Base;

class Radio extends Base
{
    const LABEL            = 'Radio';
    const SUPPORTS_OPTIONS = true;

    // --------------------------------------------------------------------------

    /**
     * Renders the field's HTML
     * @param  $aData The field's data
     * @return string
     */
    public function render($aData)
    {
        $sOut  = get_instance()->load->view('formbuilder/fields/open', $aData, true);
        $sOut .= get_instance()->load->view('formbuilder/fields/body-radio', $aData, true);
        $sOut .= get_instance()->load->view('formbuilder/fields/close', $aData, true);

        return $sOut;
    }
}