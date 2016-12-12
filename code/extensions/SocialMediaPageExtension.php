<?php

/**
 * Class SocialMediaPageExtension
 */
class SocialMediaPageExtension extends DataExtension
{

    public function onAfterInit()
    {
        Requirements::css(INSITEAPPS_SOCIAL_MEDIA_DIR . "/css/SocialMedia.css");
    }

    function SocialMedia()
    {
        return SocialMedia::get();
    }
}
