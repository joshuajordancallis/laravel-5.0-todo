<?php

class Projects extends Eloquent {
	public function markComplete() {
		$this->complete = $this->complete ? false : true;
		$this->save();
	}
}
