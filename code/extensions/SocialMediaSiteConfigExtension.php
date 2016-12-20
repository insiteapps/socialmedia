<?php

/**
 * Class SocialMediaSiteConfigExtension
 */
class SocialMediaSiteConfigExtension extends DataExtension
{
    private static $has_many = array(
        "SocialMedia" => "SocialMedia",
    );
}
