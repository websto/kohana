	
	$('a[rel=CategoryTree]').live("click", function(){
	var id=$(this).attr('id');
	var text=$(this).text();
	var parent_id=$(this).attr('parent_id');
	//alert(id);
	//	delSelected();
	//	$(this).addClass("nodeTreeSelected");
	
	$('#contextMenu').css('position','absolute');
	$('#contextMenu').css('display','block');
	
	
	
	$('#contextMenu').offset($(this).offset());
	var top=$('#contextMenu').css('top').slice(0,-2);
	//top=(Number)top+10;
	top=parseInt(top)+15;
	$('#contextMenu').css('top',top+'px');	
	$('#contextMenu').find('a[rel=creat_new_category]').attr({'id':id,'name':text});
	$('#contextMenu').find('a[rel=delete_category]').attr({'id':id,'name':text});
	$('#contextMenu').find('a[rel=edit_category]').attr({'id':id,'editname':text,'parent_id':parent_id});
    $('#contextMenu').find('a[rel=edit_category2]').attr({'id':id,'editname':text,'parent_id':parent_id});
	
	});
	

$('a[rel=cansel_context]').live("click", function(){
	$('#contextMenu').css('display','none');
});
	
	
	//Обработка  нажатия кнопки создания новой подкатегории
		$('a[rel=creat_new_category]').live("click", function(){
		var id=$(this).attr('id');
		var parent_name=$(this).attr('name');
		
		$('#parent_name').html(parent_name);
		$('#parent_id').html(id);

        $('input[name=edit_id]').val(id);
			$('#contextMenu').css('display','none');
			centerPosition($(".creat_category"));  
			$(".creat_category").animate({ opacity: "show" }, 500 ); // показываем блок для создания новой категории
		});
		
		//Обработка  нажатия кнопки отмены создания 		
		$('a[rel=cancel_creat_new_category]').live("click", function(){	
				$(".creat_category").animate({ opacity: "hide" }, 500 );
		}); 
		
		//Обработка  нажатия кнопки сохранения новоq категории
		$('a[rel=save_new_category]').live("click", function(){
		var name=$.trim($('input[name=category_name]').val());
		var parent_id=$.trim($('#parent_id').html());
				
		if(!name){err="Укажите название категории!"; indication($("#message"),err, false);}
		else		
			$.ajax({                
						type:"POST",
						url: "ajax.php",
						data: {url: "action/add_category.php",title:name,parent:parent_id},
						cache: false,  
						success: function(data){
		
							var response = eval("(" + data + ")");		
							indication($("#message"),response.msg, response.status);
							$(".creat_category").hide();
						
							//переходим на последнюю страницу
						
							$.ajax({                
								type:"POST",
								url: "ajax.php",
								data: { url: "category.php"},
								cache: false,  
								success: function(data){
									$("#content").html(data);  
								}  
							
						}); 
						
						}
				
					}); 
			
		
		});
		
		
		//Обработка  нажатия кнопки удаления  категории
		$('a[rel=delete_category]').live("click", function(){
			var id=$(this).attr('id');
			$.ajax({                
						type:"POST",
                        url: "/admin_mexico/categ/delete",
						data: {url: "/admin_mexico/categ/delete",id:id},
						cache: false,  
						success: function(data){

							var response = eval("(" + data + ")");
							indication($("#message"),response.msg, response.status);
							$('#contextMenu').hide();
						

						
						}
				
					}); 
			       return false;
		
		});
		
				
		//Обработка  нажатия кнопки отмены редактирования категорий		
		$('a[rel=cancel_edit_category]').live("click", function(){	
			$(".edit_category").animate({ opacity: "hide" }, 500 );
		});

       //Обработка  нажатия кнопки отмены редактирования изображения
        $('a[rel=cancel_edit_category]').live("click", function(){
        $(".edit_category2").animate({ opacity: "hide" }, 500 );
        });
		
		//Обработка  нажатия кнопки редактирования  категории
		$('a[rel=edit_category]').live("click", function(){
		var parent_id=$(this).attr('parent_id');
		var id=$(this).attr('id');
		$("#edit_id").html(id);
		var editname=$(this).attr('editname');

		$("#category_edit_select [value='"+parent_id+"']").attr("selected", "selected");
	
		
		$('input[name=edit_name]').val(editname);
        $('input[name=edit_id]').val(id);
		$('#contextMenu').css('display','none');
			centerPosition($(".edit_category"));  
			$(".edit_category").animate({ opacity: "show" }, 500 );
		});

    //Обработка  нажатия кнопки редактирования  изображения
       $('a[rel=edit_category2]').live("click", function(){
        var parent_id=$(this).attr('parent_id');
        var id=$(this).attr('id');
        $("#edit_id").html(id);
        var editname=$(this).attr('editname');

        $("#category_edit_select [value='"+parent_id+"']").attr("selected", "selected");


        $('input[name=edit_name]').val(editname);
        $('input[name=edit_id]').val(id);
        $('#contextMenu').css('display','none');
        centerPosition($(".edit_category2"));
        $(".edit_category2").animate({ opacity: "show" }, 500 );
        });


		//Обработка  нажатия кнопки сохранения редактированной информации категории
		$('a[rel=save_edit_category]').live("click", function(){
		
		var name=$.trim($('input[name=edit_name]').val());
		var parent_id=$.trim($('#category_edit_select').val());
		//var id=$("#edit_id").html();
		
		if(!name){err="Укажите название категории!"; indication($("#message"),err, false);}
		else		
			$.ajax({                
						type:"POST",
						url: "ajax.php",
						data: {url: "/admin_mexico/categ/edit",title:name,id:id,parent:parent_id},
						cache: false,  
						success: function(data){
		
							var response = eval("(" + data + ")");		
							indication($("#message"),response.msg, response.status);
							$(".edit_category").hide();
											
							$.ajax({                
								type:"POST",
								url: "ajax.php",
								data: { url: "category.php"},
								cache: false,  
								success: function(data){
									$("#content").html(data);  
								}  
							
						}); 
						
						}
				
					}); 
			
		
		});
		