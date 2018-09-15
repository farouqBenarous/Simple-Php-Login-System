function newajax() {
    var ajax; 
    if (window.XMLHttpRequest) {
      ajax = new XMLHttpRequest();
      }
      else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }
        return ajax ;
}

  function loadajax() {
        var ajaxhandler = newajax();

        ajaxhandler.onreadystatechange = function () {
             if (ajaxhandler.readyState == 4 && ajaxhandler.status == 200) {
                 window.alert(ajaxhandler.responseText);
             }
             ajaxhandler.open ("GET","ajaxinfo.html",true);
             ajaxhandler.send();
      }


  }

