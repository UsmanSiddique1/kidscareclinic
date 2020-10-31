$('.spc').on('click', function(){
     
     spc1();
	});
	function spc1(){

		var tr ='<tr>'+ 
					
                        '<td><input  class="form-control" type="text"  placeholder="Add Specialization" name="spc[]"></td>'+
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});