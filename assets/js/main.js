function auto_grow(element){
	element.style.height = "5px";
	element.style.height = (element.scrollHeight)+"px";
}

$(document).ready(function() {

	

	$.get('ajax/note.php', function(data) {
		$('#cards').html(data);
	});

		$(document).on('click', '#catatan', function(){
			$.get('ajax/note.php', function(data) {
				$('#cards').html(data);
			});
		});

		$(document).on('click', '#arsip', function(){
			$.get('ajax/arsip.php', function(data) {
				$('#cards').html(data);
			});
		});
	
		$(document).on('click', '#hapus', function(){
			$.get('ajax/delete.php', function(data) {
				$('#cards').html(data);
			});
		});
	});

	


