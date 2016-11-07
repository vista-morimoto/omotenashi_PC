

(function(){

var s = document.getElementsByTagName("script");

var d = s[s.length-1].src.substring(0, s[s.length-1].src.lastIndexOf("/")+1);

for(var i=0; i<arguments.length; i++){

document.write('<script type="text/javascript" src="'+d+arguments[i]+'"></script>');	}

})(

"jquery-1.7.2.min.js",

"thickbox.js",

"yuga.js",

"yuga.onload.js"

);



