$( document ).ready(function() {
    $('#pis').attr('placeholder','0 - 30');
	$('#pis').attr('max','30');
	
	$('#ust').attr('placeholder','0 - 28');
	$('#ust').attr('max','28');
	
	$('#jazyk').change(function() {
    if (this.value == 'cj') {
        $('#pis').attr('placeholder','0 - 30');
		$('#pis').attr('max','30');
		
		$('#ust').attr('placeholder','0 - 28');
		$('#ust').attr('max','28');
    }
	});
	
	
		$('#jazyk1').change(function() {
    if (this.value == 'aj') {
        $('#pis').attr('placeholder','0 - 24');
		$('#pis').attr('max','24');
		
		$('#ust').attr('placeholder','0 - 18');
		$('#ust').attr('max','18');
    }
	});
	
			$('#jazyk2').change(function() {
    if (this.value == 'jcj') {
        $('#pis').attr('placeholder','0 - 24');
		$('#pis').attr('max','24');
		
		$('#ust').attr('placeholder','0 - 36');
		$('#ust').attr('max','36');
    }
	});
	
	
	
});