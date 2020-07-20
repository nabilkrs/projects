/*$(document).ready(function(){
$("#btn").attr("disabled",true);
$("#msgg").on("keyup",function(){
if($("#msg").val()=="")
{
  $("#btn").attr("disabled",false); 
}
else
{
  $("#btn").attr("disabled",true);
}


});



});
*/
$(document).ready(function(){
  
     $("#for").hide().fadeIn(3000);  



 


});
$(document).ready(function(){
 
  $("#btn").attr("disabled",true);
  $("#num").on("input propertychange",function(){



   if(($("#msgg").val()==""))
   {
    $("#btn").attr("disabled",true);
   }
   else  if ($("#num").val()=="")
     {
      $("#btn").attr("disabled",true);
     }
     else
     {
       $("#btn").attr("disabled",false);
     }
   
  
 });
 








});




$(document).ready(function(){
    $("#num").click(function(){
        $("#msg").html("<div id=\"msg\"></div>")
      var ch="<div>Don't forget the write your country code.</div><br><div id=\"hint\">Exemple +1 **********</div> ";
      $("#msg").html(ch);
      $("#msg").fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
    });
  });
  





  var i = 0;
  function move() {
     
     
     
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("bar");
      var width = 1;
      var id = setInterval(frame, 10);
      function frame() {
        if (width >= 99) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
    
  }
//<div class="lds-hourglass"></div>
  function verif()
{
  alert("hello");
 

}

$(document).ready(function(){
  $("#btn").click(function(){

  
      move();
        $("#btn").text("Sending ...");
       



 

  });
});
