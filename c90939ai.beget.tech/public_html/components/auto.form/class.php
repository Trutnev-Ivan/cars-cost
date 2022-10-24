<?php

class AutoForm extends Component
{
	public function execute()
	{
		$this->result["CAR_MARKS"] = $this->getMarks();
		$this->result["CAR_BOXES"] = $this->getBoxes();
		$this->result["DRIVE_UNITS"] = $this->getDriveUnits();
		$this->result["CAR_TYPES"] = $this->getCarTypes();
		$this->result["CAR_COLORS"] = $this->getCarColors();
		$this->result["COUNTRIES"] = $this->getCountries();
		$this->result["CAR_MODELS"] = $this->getModels();
		$this->result["CAR_CLASSES"] = $this->getCarClasses();
		$this->includeTemplate();
	}

	public function getMarks()
	{
		global $DB;

		$dbMarks = $DB->query("SELECT * FROM marks");
		$marks = [];

		while ($mark = $dbMarks->fetch())
		{
			$marks[] = $mark;
		}

		return $marks;
	}

	public function getBoxes()
	{
		global $DB;

		$dbBox = $DB->query("SELECT * FROM boxes");
		$boxes = [];

		while ($box = $dbBox->fetch())
		{
			$boxes[] = $box;
		}

		return $boxes;
	}

	public function getDriveUnits()
	{
		global $DB;

		$dbDriveUnit = $DB->query("SELECT * FROM drive_units");
		$driveUnits = [];

		while ($driveUnit = $dbDriveUnit->fetch())
		{
			$driveUnits[] = $driveUnit;
		}

		return $driveUnits;
	}

	public function getCarTypes()
	{
		global $DB;

		$dbCarType = $DB->query("SELECT * FROM car_types");
		$carTypes = [];

		while ($carType = $dbCarType->fetch())
		{
			$carTypes[] = $carType;
		}

		return $carTypes;
	}

	public function getCarColors()
	{
		global $DB;

		$dbCarColor = $DB->query("SELECT * FROM car_colors");
		$carColors = [];

		while ($carColor = $dbCarColor->fetch())
		{
			$carColors[] = $carColor;
		}

		return $carColors;
	}

	public function getCountries()
	{
		global $DB;

		$dbCountries = $DB->query("SELECT * FROM countries");
		$countries = [];

		while ($country = $dbCountries->fetch())
		{
			$countries[] = $country;
		}

		return $countries;
	}

	public function getModels()
	{
		global $DB;

		$dbCarModels = $DB->query("SELECT * FROM car_models");
		$carModels = [];

		while ($carModel = $dbCarModels->fetch())
		{
			$carModels[] = $carModel;
		}

		return $carModels;
	}

	public function getCarClasses()
	{
		global $DB;

		$dbCarClasses = $DB->query("SELECT * FROM car_classes");
		$carClasses = [];

		while ($carClass = $dbCarClasses->fetch())
		{
			$carClasses[] = $carClass;
		}

		return $carClasses;
	}
}
