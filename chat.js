
  function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
function load_new_stuff(interv){
    
    var hook, data_to_transfer;
    
    console.log(interv);
    
 if (interv > 0) {
     //first move the data outside the .new-msgs div
     //Load new data if any in .new-msgs
     
     hook = ".new-msgs";
     data_to_transfer = $(hook)[0].innerHTML;
     
     console.log(data_to_transfer);
     $(hook).before(data_to_transfer);
     $(hook).remove('.messages');
     
 } else {
     hook = ".msgs";
     
 }
    
 localStorage['lpid']=$(hook + " .msg:last").attr("title");
    console.log(hook);
    
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
  var interv = 0;

var tn= setInterval(function(){
 load_new_stuff(interv);
    
    interv++;
},3000);
