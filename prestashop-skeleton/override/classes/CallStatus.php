<?php
/*




*/
class CallStatusCore extends ObjectModel
{
 	/** @var string Name */
	public $name;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'call_status',
		'primary' => 'id_call_status',
		'multilang' => true,
		'fields' => array(
			// Lang fields
			'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
		),
	);
	
	public function add($autodate = true, $null_values = true)
	{
		$success = parent::add($autodate, $null_values);
		return $success;
	}	
	
	
	/**
	* Get all available statuses
	*
	* @return array statuses
	*/
	public static function getCallStatuses($id_lang = null)
	{
		if (!$id_lang)
			$id_lang = (int)Configuration::get('PS_LANG_DEFAULT');
	
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT cs.`id_call_status`, csl.`name` AS name
		FROM `'._DB_PREFIX_.'call_status` cs
		LEFT JOIN `'._DB_PREFIX_.'call_status_lang` csl ON (cs.`id_call_status` = csl.`id_call_status` AND csl.`id_lang` = '.(int)$id_lang.')
		ORDER BY cs.`id_call_status` ASC');
	}

	/**
	* Get the current status name
	*
	* @return string Type
	*/
	public static function getCallStatus($id_call_status, $id_lang = null)
	{
		if (!$id_lang)
			$id_lang = Configuration::get('PS_LANG_DEFAULT');

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
			SELECT csl.`name`
			FROM `'._DB_PREFIX_.'call_status` cs
			LEFT JOIN `'._DB_PREFIX_.'id_call_status_lang` csl ON (cs.`id_call_status` = csl.`id_call_status`)
			WHERE cs.`id_call_status` = '.(int)$id_call_status.'
			AND csl.`id_lang` = '.(int)$id_lang
		);
	}

	/**
	* Get the call status id by name
	*
	* @return Id
	*/
	public static function getCallStatusIdByName($id_lang = null, $status_name)
	{
		if (!$id_lang)
			$id_lang = Configuration::get('PS_LANG_DEFAULT');

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
			SELECT cs.`id_call_status`
			FROM `'._DB_PREFIX_.'call_status` cs
			LEFT JOIN `'._DB_PREFIX_.'id_call_status_lang` csl ON (cs.`id_call_status` = csl.`id_call_status`)
			WHERE csl.`name` = "'.$status_name.'"
			AND csl.`id_lang` = '.(int)$id_lang
		);
	}
}


