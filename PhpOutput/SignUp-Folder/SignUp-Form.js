function AllowOnlyNumbers(e) {
    e = (e) ? e : window.event;
  
    var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
    var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
    var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);
  
    return (/^\d+$/.test(str));
  }


  //=============anim
