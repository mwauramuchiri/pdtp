
  function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
function load_new_stuff(){
    
 localStorage['lpid']=$(".msgs .msg:last").attr("title");
    
 $(".msgs").load("msgs.php", {'last_id' : $('.messages').last().attr('data-message-id')}, function(){
  
     if(localStorage['lpid'] != $(".msgs .msg:last").attr("title")){
        scTop();
    }
 });
    
 $(".users").load("users.php");
    
}

  
  
  
  
  function send_to_db(){
	  

 var val_reply = document.getElementById('msg2').value;
 var val_id = document.getElementById('messageid').value;
	  if(val_id!=""){
					 
	  $.post("send.php",{msg2:val_reply,messageid:val_id},function(){
    
   });
  }
	
  }


$(document).ready(function(){
 scTop();
 $("#msg_form").on("submit",function(){
  t=$(this);
  val=$(this).find("input[type=textArea]").val();
  if(val!=""){
	   t.after("<span id='send_status'>Sending.....</span>");
   $.post("send.php",{msg:val},function(){
    load_new_stuff();
    $("#send_status").remove();
    t[0].reset();
   });
  }
  
  return false;
 });
 

});

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
	  
	 
	 
	 
	  
  });
  
var tn= setInterval(function(){
 load_new_stuff();
},3000);

