function ajaxInput(str) //kode eksekusi fungsi ajaxinput dengan value str
{
var xmlhttp;
if (str=="")
  {
  document.getElementById("tambahInput").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// kode untuk IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// kode untuk IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("tambahInput").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","prosesLooping.php?jumInput="+str,true);
xmlhttp.send();
}