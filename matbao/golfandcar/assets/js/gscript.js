/* GScript - version 1.1
Author: Goon Nguyen
================================================== */
var GScript = {
  version: 1.1,
  load: function(url, callback){
    var done = false;
    var result = {status: false, message: ""};
    var script = document.createElement('script');
    script.setAttribute('src', url);

    script.onload = handleLoad;
    script.onreadystatechange = handleReadyStateChange;
    script.onerror = handleError;

    document.head.appendChild(script);

    function handleLoad() {
      if (!done) {
        done = true;
        
        result.status = true;
        result.message = "Script was loaded successfully";

        if(callback) callback(result);
      }
    }

    function handleReadyStateChange() {
      var state;

      if (!done) {
        state = script.readyState;
        if (state === "complete") {
            handleLoad();
        }
      }
    }

    function handleError() {
      if (!done) {
        done = true;
        result.status = false;
        result.message = "Failed to load script."
        if(callback) callback(result);
      }
    }
  },

  unload: function(url, callback){
    var scripts = document.getElementsByTagName("script");
    var result = {status: false, message: ""};
    
    for (var i=0;i<scripts.length;i++) {
      var script = scripts[i];
      if (script.src)
      {
        var src = script.src;
        if(String(src).toLowerCase().indexOf(url.toLowerCase()) >= 0){
          script.parentElement.removeChild(script);
          result.status = true;
          result.message = "Unload script successfully.";
        }
      }
    }

    if(!result.status){
      result.message = "Script not found.";
    }

    if(callback) callback(result);

    return result;
  },

  isExisted: function(filename){
    var scripts = document.getElementsByTagName("script");
    var existed = false;
    for (var i=0;i<scripts.length;i++) {
      if (scripts[i].src) 
      {
        var src = scripts[i].src;
        if(String(src).toLowerCase().indexOf(filename.toLowerCase()) >= 0){
          existed = true;
        }
        //console.log(i,scripts[i].src)
      } else {
        //console.log(i,scripts[i].innerHTML)
      } 
    }
    return existed;
  },

  loadList: function(array, callback){
    var result = {status: false, message: ""};
    var count = 0;
    var total = array.length;
    //console.log("loadList")
    this.load(array[count], onComplete);

    function onComplete(result){
      count++;
      //console.log(count, total)
      if(count == total){
        result.status = true;
        result.message = "All scripts were loaded.";
		if (!callback){
			console.log("abc");
		}
        if(callback) callback(result);
      } else {
        if(!GScript.isExisted(array[count])){
          GScript.load(array[count], onComplete);
        } else {
          console.log("[GScript] This script was existed.")
        }
      }
    }
  }
}