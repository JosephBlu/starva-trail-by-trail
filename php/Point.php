<?php

/**
 * Created by PhpStorm.
 * User: josephramirez
 * Date: 1/19/17
 * Time: 9:13 AM
 */
class Point {
	/**
	 *latitude are start and finish point.
	 * @var float $latitude
	 **/
	private $setLatitude;
	/**
	 *longitude are start and finish point.private
	 * @var float $longitude
	**/
	private $setLongitude;
	/**
	 *constructor for point of longitude and latitude
	 * @param float $latitude Latitude
	 * @param float $longitude Longitude
	 **/
	function __construct( $setLongitude=null, $setLatitude=null) {

		$this->setLongitude = $setLongitude;
		$this->setLatitude = $setLatitude;
	}

		/** accessor method for latitude
		 *
		 *
		 **/
		public function setLatitude() {
			return($this-> lat);
		}


		/**
		 * mutator method for Latitude
		 **/
		public function Latitude($setLatitude= null) {


		}
}

