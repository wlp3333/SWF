//Internets demo function
function myFunction() {
document.getElementById("demo1").innerHTML = "Hello World";
}
//Wills function to create HTML on the fly
function myFunction2() {
let wordsx = ['First','Second','Third','Forth','Fifth','Sixth','Seventh','Eight','Ninth','Tenth','Twelveth'];
var i,charnum;
var text = "";
charnum = document.getElementById("n").value;
////window.alert(charnum);
for (i = 0; i < charnum; i++) {
ln = "l" + i;
text += "<p>The " + wordsx[i] + " letter is: <input type='text' value='_' name='"+ln+"'></p>  <br>";
}
document.getElementById("demo1").innerHTML = "Processed!";
document.getElementById("demo2").innerHTML = text;
}
