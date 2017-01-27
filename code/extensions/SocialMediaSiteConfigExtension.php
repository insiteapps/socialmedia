<?php

use SilverStripe\ORM\DataExtension;

/**
 * Class SocialMediaSiteConfigExtension
 */
class SocialMediaSiteConfigExtension extends DataExtension
{
    private static $has_many = array(
        "SocialMedia" => "SocialMedia",
    );
}
