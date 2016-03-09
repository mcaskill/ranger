<?php
/**
 * @copyright CONTENT CONTROL GmbH, http://www.contentcontrol-berlin.de
 * @author CONTENT CONTROL GmbH, http://www.contentcontrol-berlin.de
 * @license https://opensource.org/licenses/MIT MIT
 */
namespace OpenPsa\Ranger\Provider;

use OpenPsa\Ranger\Ranger;
use IntlDateFormatter;

class DefaultProvider implements Provider
{
    public function modifySeparator(IntlDateFormatter $intl, $best_match, $separator)
    {
        if (   $best_match != Ranger::MONTH
            || $intl->getDateType() < IntlDateFormatter::MEDIUM)
        {
            return ' ' . trim($separator) . ' ';
        }
        return $separator;
    }
}