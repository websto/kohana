		
	$(document).ready(function(){
 	
	//����������� ������� �� ������ � ������
			//$('a[id=product]').click(function(){show("catalog.php");});
			$('a[id=category]').click(function(){show("admin_mexico/main/categ");});
	});  	

	
	//����������� �������� ��� ������ 
		function show(url)  
        {  
            $.ajax({                
				type: "POST",
				url: "ajax.php",
				data: { url: url },
                cache: false,  
                success: function(data){  
			        $("#content").html(data);  
			
                }  
            });  
        }  
		
	  function indication(object,text, type)  
        {
				var background="#9abb8b";
				var bordercolor="#588a41";
			
				if(!type){
					background="#fab0ab";  
					bordercolor="#fc6f64";
				}
				object.animate({ opacity: "show" }, "slow" );
				object.html(text); 
				object.css('background',background);
				object.css('border-color',bordercolor);			
				object.animate({ opacity: "hide" }, 3000 );
				
		}
		
		//���������������� �������� �� ������ ����
		function centerPosition(object)  
        {
			object.css('position', 'absolute');
			object.css('left', ($(window).width()-object.width())/6+ 'px');
			object.css('top', ($(window).height()-object.height())/15+ 'px');
		}
	
		
//$.getScript('/media/admin/js/catalog.js');
//$.getScript('/media/admin/js/category.js');



