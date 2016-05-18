<?php

/**
 * This class provides the "Likert - Importance" field type
 *
 * @package     Nails
 * @subpackage  module-form-builder
 * @category    Controller
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\FormBuilder\FormBuilder\FieldType;

use Nails\Factory;

class LikertImportance extends Likert
{
    const LABEL = 'Likert - Importance';

    /**
     * The terms to use in this likert question
     * @var array
     */
    protected $aLikertTerms = array(
        'Very Important',
        'Important',
        'Moderately Important',
        'Of Little Importance',
        'Unimportant'
    );
}
