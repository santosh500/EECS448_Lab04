function validate1()
{
   var userTag = document.getElementById('user1').value;
   var passTag = document.getElementById('passid').value;
   var free1 = document.getElementById('f').checked;
   var night1 = document.getElementById('n').checked;
   var three1 = document.getElementById('t').checked;
   var a=0;
   if((passTag.length == 0))
   {
	   alert("The Passwords are not there");
   	   return false;
   }
   else if(free1==false && night1==false && three1==false)
   {
   		alert("Please give a shipping option");
   		return false;
   }
   
   
   
   
}