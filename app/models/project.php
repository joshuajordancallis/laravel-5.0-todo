<?php

class Project extends Eloquent {
	public function markComplete() {
		$this->complete = $this->complete ? false : true;
		$this->save();
	}

	public function getProject($projectID) {
		return $this->where('id', '=', $projectID)->firstOrFail();
	}
	public function getProjectSubTasks($projectID) {
		return $this->where('projects.id', '=', $projectID)->join('subtasks', function($join)
        {
            $join->on('subtasks.project_id', '=', 'projects.id');
        })
        ->get();
	}
}
