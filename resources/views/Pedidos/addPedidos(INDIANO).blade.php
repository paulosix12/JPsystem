@extends('app') 
@section('conteudo')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Criar Pedido</h1>
				<h1>Add Remove Table Rows Dynamically using jQuery</h1>
				<div id='container'>
					<form id='students' method='post' name='students' action='index.php'>

						<table border="1" cellspacing="0">
							<tr>
								<th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
								<th>S. No</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Tamil</th>
								<th>English</th>
								<th>Computer</th>
								<th>Total</th>
							</tr>
							<tr>
								<td><input type='checkbox' class='case' /></td>
								<td><span id='snum'>1.</span></td>
								<td><input type='text' id='first_name' name='first_name[]' /></td>
								<td><input type='text' id='last_name' name='last_name[]' /></td>
								<td><input type='text' id='tamil' name='tamil[]' /></td>
								<td><input type='text' id='english' name='english[]' /> </td>
								<td><input type='text' id='computer' name='computer[]' /></td>
								<td><input type='text' id='total' name='total[]' /> </td>
							</tr>
						</table>
                        
						<button type="button" class='delete'>- Delete</button>
						<button type="button" class='addmore'>+ Add More</button>
						<p>
							<input type='submit' name='submit' value='submit' class='but' /></p>
					</form>
                </div>
                <input type="text" id="q">
            
				<script type="text/javascript" src="/js/jquery.js"></script>
				<script type="text/javascript" src="/js/jquery-ui.min.js"></script>

				<script type="text/javascript">
					$("delete").on('click', function() {
                    $('.case:checkbox:checked').parents("tr").remove();
                    $('.check_all').prop("checked", false); 
                    check();
                
                });
                var i=2;
                $(".addmore").on('click',function(){
                    count=$('table tr').length;
                    var data="<tr><td><input type='checkbox' class='case'/></td><td><span id='snum"+i+"'>"+count+".</span></td>";
                    data +="<td><input type='text' id='first_name"+i+"' name='first_name[]'/></td> <td><input type='text' id='last_name"+i+"' name='last_name[]'/></td><td><input type='text' id='tamil"+i+"' name='tamil[]'/></td><td><input type='text' id='english"+i+"' name='english[]'/></td><td><input type='text' id='computer"+i+"' name='computer[]'/></td><td><input type='text' id='total"+i+"' name='total[]'/></td></tr>";
                    $('table').append(data);
                    i++;
                });
                
                function select_all() {
                    $('input[class=case]:checkbox').each(function(){ 
                        if($('input[class=check_all]:checkbox:checked').length == 0){ 
                            $(this).prop("checked", false); 
                        } else {
                            $(this).prop("checked", true); 
                        } 
                    });
                }
                
                function check(){
                    obj=$('table tr').find('span');
                    $.each( obj, function( key, value ) {
                    id=value.id;
                    $('#'+id).html(key+1);
                    });
                    }

                    $('#countryname_1').autocomplete({
                        source: function( request, response ) {
                              $.ajax({
                                  url : 'search/autocomplete',
                                  dataType: "json",
                                data: {
                                   name_startsWith: request.term,
                                   type: 'country_table',
                                   row_num : 1
                                },
                                 success: function( data ) {
                                     response( $.map( data, function( item ) {
                                         var code = item.split("|");
                                        return {
                                            label: code[0],
                                            value: code[0],
                                            data : item
                                        }
                                    }));
                                }
                              });
                          },
                          autoFocus: true,	      	
                          minLength: 0,
                          select: function( event, ui ) {
                            var names = ui.item.data.split("|");						
                            $('#country_no_1').val(names[1]);
                            $('#phone_code_1').val(names[2]);
                            $('#country_code_1').val(names[3]);
                        }		      	
                    });
				</script>
				@endsection