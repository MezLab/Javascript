/*
ResizeMez JavaScript
Author = Massimo Maestri - Web Developer
Web Site = http://www.massimomaestri.com
Enjoy the moment :-)
*/

/* Menu Icon Show/Hide */
var icoPhone = document.getElementById("icoPhone"),
    icoTablet = document.getElementById("icoTablet"),
    icoLaptop = document.getElementById("icoLaptop");
    fas = document.querySelectorAll(".fas");

      fas[0].addEventListener("click", function(){
        icoTablet.style.display = 'none';
        icoLaptop.style.display = 'none';
        icoPhone.style.display =='block' ? icoPhone.style.display = 'none' : icoPhone.style.display = 'block';
      });
      fas[1].addEventListener("click", function(){
        icoLaptop.style.display = 'none';
        icoPhone.style.display = "none";
        icoTablet.style.display =='block' ? icoTablet.style.display = 'none' : icoTablet.style.display = 'block';
      });
      fas[2].addEventListener("click", function(){
        icoPhone.style.display = "none";
        icoTablet.style.display = 'none';
        icoLaptop.style.display =='block' ? icoLaptop.style.display = 'none' : icoLaptop.style.display = 'block';
      });

  function closer(){
    icoPhone.style.display = "none";
    icoTablet.style.display = "none";
    icoLaptop.style.display = "none";
  }

 /* RESIZE MEZ */
 function resizeMez(w,h){
	 var width = document.getElementById('window').style.width = w + "px";
	 var height = document.getElementById('window').style.height = h + "px";
   closer();
 }
