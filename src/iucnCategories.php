<?php

namespace OmniSpecies\iucnCategories;

/**
 * Class iucnCategories
 * @author Omni Species <admin@omnispecies.com>
 * @link https://www.omnispecies.com
 * @package OmniSpecies\iucnCategories
 */
class iucnCategories
{
	/** @var categories */
	private $categories;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->categories = '../../iucn-categories-json/iucnCategories.min.json';
	}

	/**
	 * Get IUCN Categories.
	 *
	 * @return array|null
	 */
	public function getIucnCategories(): ?object
	{
		// Checking for file.
		if (!file_exists($this->categories))
		{
			return null;
		}

		// JSON decode.
		$categories = json_decode(file_get_contents($this->categories));

		return $categories;
	}
}
