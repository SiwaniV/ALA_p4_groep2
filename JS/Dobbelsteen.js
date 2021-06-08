var face0=new Image()
face0.src="Images/Dobbelsteen/d1.gif"
var face1=new Image()
face1.src="Images/Dobbelsteen/d2.gif"
var face2=new Image()
face2.src="Images/Dobbelsteen/d3.gif"
var face3=new Image()
face3.src="Images/Dobbelsteen/d4.gif"
var face4=new Image()
face4.src="Images/Dobbelsteen/d5.gif"
var face5=new Image()
face5.src="Images/Dobbelsteen/d6.gif"

function throwdice(){
    //create a random integer between 0 and 5
    var randomdice=Math.round(Math.random()*5)
    document.images["mydice"].src=eval("face"+randomdice+".src")
    }