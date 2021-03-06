<?php
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class UiowaBarSiteConfigExtension extends DataExtension {

	private static $db = array(
		'QuickLinkTitleOne' => 'Text',
		'QuickLinkTitleTwo' => 'Text',
		'QuickLinkTitleThree' => 'Text',
		'QuickLinkURLOne' => 'Text',
		'QuickLinkURLTwo' => 'Text',
		'QuickLinkURLThree' => 'Text',
		'EnableSearch' => 'Boolean',
		'DisableAlert' => 'Boolean',
	);

	private static $has_one = array(

	);

	private static $defaults = array(
		'QuickLinkTitleOne' => 'Division of Student Life',
		'QuickLinkURLOne' => 'https://studentlife.uiowa.edu',
	);

	public function updateCMSFields(FieldList $fields) {

		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleOne', 'Quick Link Title'));
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLOne', 'Quick Link URL'));

		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleTwo', 'Quick Link Title'));
		$fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLTwo', 'Quick Link URL'));

		// $fields->addFieldToTab('Root.Main', new TextField('QuickLinkTitleThree', 'Quick Link Title'));
		// $fields->addFieldToTab('Root.Main', new TextField('QuickLinkURLThree', 'Quick Link URL'));

		$fields->addFieldToTab('Root.Main', new CheckboxField('EnableSearch', 'Enable search?'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('DisableAlert', 'Disable Alert in UiowaBar'));

		return $fields;
	}

}