var nums = {
  0: "०",
  1: "१",
  2: "२",
  3: "३",
  4: "४",
  5: "५",
  6: "६",
  7: "७",
  8: "८",
  9: "९",
};

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
//   h = convertToNepali(h);
//   m = convertToNepali(m);
//   s = convertToNepali(s);
  document.getElementById("live-time").innerHTML = h + " : " + m + " : " + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  } // add zero in front of numbers < 10
  return i;
}

function convertToNepali(strNum) {
  var arrNumNe = strNum
    .toString()
    .split("")
    .map(function (ch) {
      if (ch === "." || ch === ",") {
        return ch;
      }
      return nums[Number(ch)];
    });
  return arrNumNe.join("");
}

document.addEventListener("DOMContentLoaded", function () {
  startTime();
});
