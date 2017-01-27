<?php

use SilverStripe\ORM\DataExtension;

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


    function getSocialMedia()
    {
        return $this->SocialMedia();
    }

    function SiteSocialMedia()
    {
        return SocialMedia::get();
    }
}

