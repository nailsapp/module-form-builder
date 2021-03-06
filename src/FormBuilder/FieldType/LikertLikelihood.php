<?php

/**
 * This class provides the "Likert - Liklihood" field type
 *
 * @package     Nails
 * @subpackage  module-form-builder
 * @category    Controller
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\FormBuilder\FormBuilder\FieldType;

/**
 * Class LikertLikelihood
 *
 * @package Nails\FormBuilder\FormBuilder\FieldType
 */
class LikertLikelihood extends Likert
{
    const LABEL        = 'Likert - Liklihood';
    const LIKERT_TERMS = [
        'Very Likely',
        'Likely',
        'Maybe',
        'Unlikely',
        'Very Unlikely',
    ];
}
