<?php

/**
 * Created by PhpStorm.
 * User: josephramirez
 * Date: 1/19/17
 * Time: 9:00 AM
 * @Joseph Ramirez <jramirez98@cnm.edu
 */
class Trail {
	/**
	 * id for this Trail is the primary key
	 * @var int $trailId
	 **/
private $trailId;
	/**
	 * id for the profile attached to the Trail; is the foreign key
	 * @var int $trailProfileId
	 **/
private $trailProfileId;
	/**
	 *will be using class Point for long and lat coord
	 *
	 **/
	private $trailStart;
	/**
	 * will be using class Point for long anf lat coord
	 *
	 **/
	private $trailEnd;
}