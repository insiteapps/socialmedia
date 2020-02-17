<?php


namespace InsiteApps\Social;

use DataExtension;
use SocialMedia;

class SocialMediaPageExtension extends DataExtension
{

    private static $has_many = array(
        'SocialMedia' => 'SocialMedia',
    );
}

class SocialMediaPageControllerExtension extends DataExtension
{

    public function getSocialMedia()
    {
        return $this->SocialMedia();
    }

    public function SiteSocialMedia()
    {
        return $this->SocialMedia();
    }

    public function HeaderTopSocialMedia()
    {
        return SocialMedia::get()->filter( [
            'HeaderTop' => true,
        ] );
    }

}

