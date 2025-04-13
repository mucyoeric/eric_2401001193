<?php
// MUCYO Eric's Intro Script with age stored but not shown

class Person {
    public $name;
    public $age; // Age is stored, but not displayed
    public $nationality;
    public $university;
    public $fieldOfStudy;
    public $location;
    public $hobbies = [];
    public $careerGoals = [];
    public $position;
    public $hasTeam;

    public function __construct($name, $age, $nationality, $university, $fieldOfStudy, $location) {
        $this->name = $name;
        $this->age = $age; // Age is saved here
        $this->nationality = $nationality;
        $this->university = $university;
        $this->fieldOfStudy = $fieldOfStudy;
        $this->location = $location;
    }

    public function addHobby($hobby) {
        $this->hobbies[] = $hobby;
    }

    public function addCareerGoal($goal) {
        $this->careerGoals[] = $goal;
    }

    public function setBasketballPosition($position) {
        $this->position = $position;
    }

    public function setTeamStatus($hasTeam) {
        $this->hasTeam = $hasTeam;
    }

    public function introduce() {
        echo "<p>Hello! My name is <strong>{$this->name}</strong>.</p>";
        echo "<p>I'm a {$this->nationality} student at <strong>{$this->university}</strong>, studying <strong>{$this->fieldOfStudy}</strong> in {$this->location}.</p>";

        if (!empty($this->hobbies)) {
            echo "<p>I enjoy: <em>" . implode(', ', $this->hobbies) . "</em>.</p>";
        }

        if (!empty($this->careerGoals)) {
            echo "<p>My goals include: <em>" . implode(', ', $this->careerGoals) . "</em>.</p>";
        }

        if (!empty($this->position)) {
            echo "<p>I play as a <strong>{$this->position}</strong> in volleyball.</p>";
        }

        if (isset($this->hasTeam)) {
            echo $this->hasTeam ? "<p>I currently play for a team.</p>" : "<p>I currently do not have a team to play in.</p>";
        }

        echo "<p>Nice to meet you!</p>";
    }
}

// Create an instance for Elyse
$elyse = new Person("MUCYO Eric", 23, "Black", "University of Kigali", "Information Technology", "the UK");
$elyse->addHobby("volleyball");
$elyse->addHobby("coding");

$elyse->addCareerGoal("becoming a vollball player");
$elyse->addCareerGoal("becoming an IT engineer");

$elyse->setBasketballPosition("libero");
$elyse->setTeamStatus(false); // false = doesn't have a team currently

$elyse->introduce();
?>
