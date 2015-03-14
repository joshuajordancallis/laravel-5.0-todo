if (typeof jQuery === "undefined") { throw new Error("This Script requires jQuery") }
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip()


	var i = 3,
		OPTIONS_LIMIT = 300;
	function addInput(i) {
		var e = $('<div class="form-group"><div class="input-group"><input type="text" name="subtask[]" class="form-control project-task" placeholder="Project Sub Task '+i+'"><span class="input-group-btn"><a href="#" tabindex="-1" class="btn btn-link add-description" data-targetid="'+i+'" title="Add description for task"><span class="fa fa-plus"></span></a></span><input type="text" name="subtaskdescription[]" data-fid="'+i+'" class="subtaskdescription"></div></div>');
		$('.subtasklist>.form-group:last').after(e);
	}

	$(document).on('keyup', '.project-task:last', function() {
		if (i !== OPTIONS_LIMIT) {
			i++;
			addInput(i);
		}
		return false;
	});

	$('#new-field').on('click', function() {
		if (i !== OPTIONS_LIMIT) {
			i++;
			addInput(i);
		}
		return false;
	});
	var targetid = 1;
	$(document).on('click', '.add-description', function(e) {
		$('#descriptionModal').modal('toggle');
		targetid = $(this).data('targetid');
		e.preventDefault();
	});
	$('#save-description').click(function(e) {
		var text = $('#description').val();
		$('.subtaskdescription[data-fid="'+targetid+'"]').val(text);
		$('#description').val('');
		$('#descriptionModal').modal('hide');
		e.preventDefault();
	});
	$('#cancel-description').click(function(e) {
		$('#description').val('');
		$('#descriptionModal').modal('hide');
		e.preventDefault();
	});

});
