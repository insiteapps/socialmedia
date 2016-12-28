<?php

namespace InsiteApps\SocialMedia;

use InsiteApps;
use InsiteApps\Common;

/**
 * Class Manager
 */
class Manager extends InsiteApps\Common\Manager
{

    public static function include_code(&$aRequirements)
    {
        $aRequirements["CSS"] = array_merge($aRequirements["CSS"], [
            INSITEAPPS_SOCIAL_MEDIA_DIR . "/css/SocialMedia.css"
        ]);

    }
}
