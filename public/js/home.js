$( document ).ready(function() {
	$( ".gallery-img" ).click(function() {
		$('.modal-body').html('<img src="'+this.src+'" class="gallery-img">');
		$('#display-gallery').modal('show');
	});
});