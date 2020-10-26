//education
$('.addRow').on('click', function(){
     
     addRow();
	});
	function addRow(){

		var tr ='<tr>'+ 
					
						'<td><input  class="form-control" type="text"  placeholder="Add Education" name="edu[]"></td>'+
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});
	//timing
	$('.time').on('click', function(){
     
     time();
	});
	function time(){

		var tr ='<tr>'+ 
					
						'<td><input  class="form-control" type="time"  placeholder="Time" name="time[]"></td>'+
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});