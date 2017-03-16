
 
var mentioned=new Array();


  function scTop(){


 $(".chat-bar").animate({scrollTop:$(".chat-bar")[0].scrollHeight});

}
function load_messages(){
    
    localStorage['lpid']=$(".msgs .msg:last").attr("title");
 $(".msgs").load("msgs.php",function(){
  if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
   scTop();
  }
 });
 $(".me").load("app.php");
   // scTop();
}

  function load_new_messages(){
   //this fetches the last div title{the last time message} of the current
     var last=$(".msg:last").attr("title");
     console.log(last);

$.post("new_messages.php",{last_id:last},function(data){

console.log("data is"+data);
if(data ==''){
 console.log("there is no new message");
}else{
console.log("there is new messag now");
if($(".new").length ==0){
console.log("div class new does not exist");
$(".msgs").append("<div  class='new'> <div  class='newmessage one'><hr></div><div  class='newmessage two'>new message(s)</div> <div  class='newmessage three'><hr></div></div>");
}else{

console.log("div class new exists");
}

$(".msgs").append(data);
scTop();
}
});
 
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
							$('.attag').html('');
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
   load_messages();
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
			 
			 output +="<li  class='"+val.sen+"'>";
			 output += val.username+": "+val.fname+" . "+val.sname;
		 output +="</li>";
			}
		});
	      output +="</ul>";
	      //console.log(output);
	
		$(div).insertBefore('.form-bar');
		$('.attag').html(output);
		
		});


 }
 
});

//function triggered by clicking the users
function addText(event) {
    var targ = event.target || event.srcElement;
	console.log(targ);
    var val=$('.inputext').val();
  var index = parseInt(val.lastIndexOf('@'));
            var id4= targ.getAttribute("class");
			//console.log("nugu");
      mentioned.push(id4);      
  var length=parseInt(val.length);
  var del=length-index;

      var text=val.slice(0, -del);
      
     var user= targ.textContent.split(":");
    text +=user[0];
   $('.inputext').val(text);
   
   //alert(mentioned);
//   you have logged out
  $('.attag').hide();
  //   $('.attag').html('');
    }





//handles replies.


 $(document).on("click", "button.reply_upvote", function(){

    var c = $(this).attr('data-message-id');

	console.log(c);
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
	  
	 
	 
	 
	  
  });//end of replying

		
//load_messages();
//interval to reload nessages
//SELECT `posted` FROM `messages` ORDER BY `posted` DESC LIMIT 1 
  var interv = 0;

var tn= setInterval(function(){
 
    load_messages();
    
},1000);

