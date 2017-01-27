<?php

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;

/**
 * Class SocialMediaExtension
 */
class SocialMediaExtension extends DataExtension
{

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {

        $gridFieldConfig = GridFieldConfig_RecordEditor::create();
        $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
        $gridfield = new GridField('SocialMedia', 'SocialMedia', $this->owner->SocialMedia(), $gridFieldConfig);
        $fields->addFieldToTab('Root.SocialMedia', $gridfield);
    }

    /**
     * @param null $type
     * @return DataList
     */
    function SocialMediaList($type = null)
    {
        $filter = $type ? [$type => true] : [];
        return SocialMedia::get()->filter($filter);
    }


}
