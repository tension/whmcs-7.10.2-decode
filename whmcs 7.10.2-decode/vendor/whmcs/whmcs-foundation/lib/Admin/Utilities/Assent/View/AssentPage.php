<?php
/*
 * @ https://EasyToYou.eu - IonCube v10 Decoder Online
 * @ PHP 5.6
 * @ Decoder version: 1.0.4
 * @ Release: 02/06/2020
 *
 * @ ZendGuard Decoder PHP 5.6
 */

namespace WHMCS\Admin\Utilities\Assent\View;

class AssentPage extends \WHMCS\Admin\ApplicationSupport\View\Html\Php\TemplatePage
{
    public function getTemplateDirectory()
    {
        return parent::getTemplateDirectory() . DIRECTORY_SEPARATOR . "assent";
    }
}

?>