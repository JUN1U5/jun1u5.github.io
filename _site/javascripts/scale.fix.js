var metas = document.getElementsByTagName('meta');
var i;
if (navigator.userAgent.match(/iPhone/i)) {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
    }
  }
  document.addEventListener("gesturestart", gestureStart, false);
}
function gestureStart() {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
    }
  }
}

// night-time css switch follows

var currentDate = new Date();
var currentMinute = (currentDate.getHours()  * 60) + currentDate.getMinutes();

if (60 <= currentMinute&&currentMinute < 300) {
  document.write("<link rel='stylesheet' href='night.css' type='text/css'>");
}
if (300 <= currentMinute&&currentMinute < 60) {
  document.write("<link rel='stylesheet' href='styles.css' type='text/css'>");
}
