<?php

namespace InsiteApps\SocialMedia;

use DataExtension;

class SocialMediaPageExtension extends DataExtension
{
    
    private static $has_many = array(
        "SocialMedia" => "InsiteApps\SocialMedia",
    );
}

class SocialMediaPageControllerExtension extends DataExtension
{
    
    
    function getSocialMedia()
    {
        return $this->SocialMedia();
    }
    
    function SiteSocialMedia()
    {
        return $this->SocialMedia();
    }
    
    function HeaderTopSocialMedia()
    {
        return $this->SocialMedia()->filter([
            "HeaderTop" => true,
        ]);
    }
    
}

