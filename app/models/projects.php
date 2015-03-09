<?php

class Projects extends Eloquent {
	public function mark() {
		$this->done = $this->done ? false : true;
		$this->save();
	}
}
