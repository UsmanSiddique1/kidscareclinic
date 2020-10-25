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
	