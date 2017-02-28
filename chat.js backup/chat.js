
 
var mentioned=new Array();


  function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
function load_new_stuff(interv){
    
    var hook, data_to_transfer;
    
    // console.log('interv');
    
 if (interv > 0) {
     //first move the data outside the .new-msgs div
     //Load new data if any in .new-msgs
     
     hook = ".new-msgs";
     data_to_transfer = $(hook)[0].innerHTML;
     
     // console.log(data_to_transfer);
     $(hook).before(data_to_transfer);
     $(hook).remove('.messages');
     
 } else {
     hook = ".msgs";
     
 }
    
 localStorage['lpid']=$(hook + " .msg:last").attr("title");
    // console.log(hook);
    
 $(".new-msgs").load("msgs.php", {'last_id' : $('.msgs .messages').last().attr('data-message-id')}, function(){
    
     
     
     if(localStorage['lpid'] != $(hook + " .msg:last").attr("title")){
        scTop();
    }
 });
    
 $(".users").load("users.php");
    
}

  
  function clear_hook() {
      
  }
  
  
  function send_to_db(){
	  

 var val_reply = document.getElementById('msg2').value;
 var val_id = document.getElementById('messageid').value;
	  if(val_id!=""){
	  	alert(mentioned);
					 
	  $.post("send.php",{msg2:val_reply,messageid:val_id},function(){
    
   });
  }
	
  }

$(document).ready(function(){
	

	 var tags=$('.attag');
	 //hidding the div attag
    tags.hide();
	

$('.inputext').keydown(function(event){
	
	
	if(event.key === '@' ){


		var searchfield = '@';
		searchName(searchfield);

		$('.inputext').keydown(function(event){
			
	  
  
       

				// searchName(searchfield);

				switch (event.which) {
					case 32:
					
					searchfield = '';
                  
					break;
				
					case 16:
                    
					break;
					case 17:

					break;
					case 8:
						

						searchfield = searchfield.slice(0, -1);
						
						
						if (searchfield !== '') {

							searchName(searchfield);
							
						} else {
							$('.attag').hide();
							//$('.attag').html('');
						}

						
					break;
					default:
						searchfield += event.key;
   								

						searchName(searchfield);
						 
					
						

					break;
				}


		});
		


}
if (event.which === 32 ){
	$('.attag').html('');
	$('.attag').hide();
	
	}
	

});	




	
 scTop();
 $("#msg_form").on("submit",function(){
  t=$(this);
  val=$(this).find("input[type=textArea]").val();
  if(val!=""){
	   t.after("<span id='send_status'>Sending.....</span>");
	  // alert(mentioned);
	   var memee= mentioned.join(',');

   $.post("send.php",{msg:val,men:memee},function(){
    load_new_stuff();
    $("#send_status").remove();
    mentioned.length=0;
    t[0].reset();
   });
  }
  
  return false;
 });

	
 function searchName (str) {
	var myexp= new RegExp(str,"i");	//makes it case insentitive
		 
	  
	$.getJSON('users.json',function(data){
			
			var div="<div  class='attag'></div>";
			var output="<ul  onclick='addText(event)' id='tags'>";
		$.each(data, function(key, val){

			if(val.username.search(myexp) !=-1 ){
			 
			 output +="<li  class='"+val.sen+"'><a>";
			 output += val.username+": "+val.fname+" . "+val.sname;
		 output +="</a></li>";	
			}
		});
	      output +="</ul>";
	      //console.log(output);
	
		$(div).insertAfter('.span10');
		$('.attag').html(output);
		
		});


 }
 
});

//function triggered by clicking the users
function addText(event) {
    var targ = event.target || event.srcElement;
    var val=$('.inputext').val();
  var index = parseInt(val.lastIndexOf('@'));
            var id4= targ.getAttribute("class");
      mentioned.push(id4);      
  var length=parseInt(val.length);
  var del=length-index;

      var text=val.slice(0, -del);
      
     var user= targ.textContent.split(":");
    text +=user[0];
   $('.inputext').val(text);
   
   //alert(mentioned);
    $('.attag').hide();
     $('.attag').html('');
    }





//handles replies.
 $(document).on("click", "button.reply-btn", function(){
	 
    var c = $(this).attr('data-message-id');
	 
	  var input = "<br><form id='msg_form22' onSubmit='send_to_db()'>  ";
	  input += "<input id='msg2' name='msg2' width='100px' size='100' type='text' />";
	  input += "<input id='messageid' name='messageid'  value='"+c+"' type='hidden' />";
	  input += "<button class='btn' type='submit'>Reply</button>";
	  input += "</form>";
  
	  
	 
	  var p = $(this).parent(".actions");
	  
	  p.innerHTML = " ";
	  
	  p.append(input);
	 $(this).addClass('hide');
	 clearInterval(tn);
	  
	 
	 
	 
	  
  });//end of replying

//interval to reload nessages
  var interv = 0;

var tn= setInterval(function(){
 load_new_stuff(interv);
    
    interv++;
},3000);
