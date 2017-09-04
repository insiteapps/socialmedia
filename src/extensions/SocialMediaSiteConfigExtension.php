<?php


namespace InsiteApps\SocialMedia;

use DataExtension;

class SocialMediaSiteConfigExtension extends DataExtension
{
    private static $has_many = array(
        "SocialMedia" => "SocialMedia",
    );
}
