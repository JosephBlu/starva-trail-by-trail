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
	private $latitude;
	/**
	 *longitude are start and finish point.private
	 * @var float $longitude
	**/
	private $longitude;
	/**
	 *constructor for point of longitude and latitude
	 * @param float $latitude Latitude
	 * @param float $longitude Longitude
	 **/
	function __construct( $longitude= newX, $latitude=newY) {

			$this->setLongitude= $longitude;
			$this->setLatitude= $latitude;
}

