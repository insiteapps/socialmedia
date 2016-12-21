<?php

/**
 * Class SocialMediaPageExtension
 */
class SocialMediaPageExtension extends DataExtension
{

    private static $has_many = array(
        "SocialMedia" => "SocialMedia",
    );
}

class SocialMediaPageControllerExtension extends DataExtension
{


    public function onAfterInit()
    {
        Requirements::css(INSITEAPPS_SOCIAL_MEDIA_DIR . "/css/SocialMedia.css");
    }

    function getSocialMedia()
    {
        return $this->SocialMedia();
    }

    function SiteSocialMedia()
    {
        return SocialMedia::get();
    }
}

