'use strict';
// Variables:////////////////////////////////////////

var firstDisp=document.getElementById("disp1");

var secondDisp=document.getElementById("disp2");

var thirdDisp=document.getElementById("disp3");

var textArea=document.getElementById("alternateNotations");

// AnswerConversions:////////////////////////////////////

var reversePolishNotation=function () {
    var rPN=firstDisp.value+" "+thirdDisp.value+" "+secondDisp.value+" ";
    return textArea.innerText=rPN

};

// MathFunctions:////////////////////////////////////

var addition= function () {
        textArea.innerText=parseFloat(firstDisp.value)+parseFloat(thirdDisp.value);
        secondDisp.value="";
        thirdDisp.value="";
    };

var subtraction= function () {
    textArea.innerText=parseFloat(firstDisp.value)-parseFloat(thirdDisp.value);
    secondDisp.value="";
    thirdDisp.value="";
};

var multiplication= function () {
    textArea.innerText=parseFloat(firstDisp.value)*parseFloat(thirdDisp.value);
    secondDisp.value="";
    thirdDisp.value="";
};

var division= function () {
    textArea.innerText=parseFloat(firstDisp.value)/parseFloat(thirdDisp.value);
    secondDisp.value="";
    thirdDisp.value="";
};

var toThePowerOf=function () {
    textArea.innerText=Math.pow((firstDisp.value),(thirdDisp.value));
    secondDisp.value="";
    thirdDisp.value="";
};

var rooting=function () {
    textArea.innerText=Math.pow((firstDisp.value),(1/thirdDisp.value));
    secondDisp.value="";
    thirdDisp.value="";
};

// This is where the buttons fill the displays

// NumberButtons:////////////////////////////////////

var handleNumber=function () {
    if (firstDisp.value==""){
    firstDisp.value=firstDisp.value+(this.innerText);
    }else if(secondDisp.value==""){
    firstDisp.value=firstDisp.value+this.innerText;
    }else if(secondDisp.value!==""){
    thirdDisp.value=thirdDisp.value+this.innerText;
}
};


// OperatorButtons:////////////////////////////////////

var plus=function (event) {
    secondDisp.value="+";
};

var minus=function (event) {
    secondDisp.value="-";
};

var multiply=function (event) {
    secondDisp.value="*";
};

var divide=function (event) {
    secondDisp.value="/";
};
var clear=function (event) {
    firstDisp.value="";
    secondDisp.value="";
    thirdDisp.value="";
    textArea.innerText="";
};

var exponentiation=function (event) {
    secondDisp.value="^";
};

var root=function (event) {
    secondDisp.value="√";
};

var equal=function (event) {
    if(firstDisp.value=="."||thirdDisp.value=="."){
        clear()
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="+")){
        addition();
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="-")){
        subtraction();
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="*")){
        multiplication();
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="/")&&(parseFloat(thirdDisp.value)!==(0))){
        division();
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="^")) {
        toThePowerOf();
    }
    if ((firstDisp.value!=="")&&(thirdDisp.value!=="")&&(secondDisp.value=="√")) {
        rooting();
    }
    firstDisp.value='';
    secondDisp.value='';
    thirdDisp.value='';
};

// Onedisplaymathfunctionbuttons:////////////////////////////////////

var decimal = function (event) {
    if (firstDisp.value==""){
        firstDisp.value=firstDisp.value+".";
    }else if((secondDisp.value=="")&&(firstDisp.value.indexOf("."))==-1){
        firstDisp.value=firstDisp.value+".";
    }else if((secondDisp.value!=="")&&(thirdDisp.value.indexOf("."))==-1){
        thirdDisp.value=thirdDisp.value+".";
    }
};

var negative=function (event) {
    if((firstDisp.value!=="")&&(thirdDisp.value=="")){
        firstDisp.value=parseFloat(firstDisp.value)*(-1)
    }else if(thirdDisp.value!==""){
        thirdDisp.value=parseFloat(thirdDisp.value)*(-1)
    }
};

var percentage=function (event) {
    if (firstDisp.value!==""&&secondDisp.value==""){
        firstDisp.value/=100
    }else if(secondDisp.value!==""&&thirdDisp.value!==""){
        thirdDisp.value/=100
    }

};

var rPN=function (event) {
    if (firstDisp.value!==""&&secondDisp.value!==""&&thirdDisp.value!==""){
        reversePolishNotation();
    }
};

var binary=function (event) {
    var firstNumber=parseFloat(firstDisp.value);
    var secondNumber=parseFloat(thirdDisp.value);
    if (firstDisp.value!==""&&secondDisp.value==""){
        firstDisp.value=(firstNumber.toString(2))
    }else if(secondDisp.value!==""&&thirdDisp.value!==""){
        thirdDisp.value=(secondNumber.toString(2))
    }

};

var hex=function (event) {
    var firstNumber = parseFloat(firstDisp.value);
    var secondNumber = parseFloat(thirdDisp.value);
    if (firstDisp.value !== "" && secondDisp.value == "") {
        firstDisp.value = (firstNumber.toString(16))
    } else if (secondDisp.value !== "" && thirdDisp.value !== "") {
        thirdDisp.value = (secondNumber.toString(16))
    }
};

// MiscFunction:////////////////////////////////////

var checkLength=function (event) {
    if (firstDisp.length>7||secondDisp.length>7||thirdDisp.length>7) {
        firstDisp.value=firstDisp.value;
        secondDisp.value=secondDisp.value;
        thirdDisp.value=thirdDisp.value;
        console.log("I'm activating!")
    }
};

// Eventlisters:////////////////////////////////////


document.getElementById('btn1').addEventListener('click', handleNumber, false);
document.getElementById('btn2').addEventListener('click', handleNumber, false);
document.getElementById('btn3').addEventListener('click', handleNumber, false);
document.getElementById('btn4').addEventListener('click', handleNumber, false);
document.getElementById('btn5').addEventListener('click', handleNumber, false);
document.getElementById('btn6').addEventListener('click', handleNumber, false);
document.getElementById('btn7').addEventListener('click', handleNumber, false);
document.getElementById('btn8').addEventListener('click', handleNumber, false);
document.getElementById('btn9').addEventListener('click', handleNumber, false);
document.getElementById('btn0').addEventListener('click', handleNumber, false);
document.getElementById('btn+').addEventListener('click', plus, false);
document.getElementById('btn-').addEventListener('click', minus, false);
document.getElementById('btn*').addEventListener('click', multiply, false);
document.getElementById('btn/').addEventListener('click', divide, false);
document.getElementById('btnc').addEventListener('click', clear, false);
document.getElementById('btn=').addEventListener('click', equal, false);
document.getElementById('btndecimal').addEventListener('click', decimal, false);
document.getElementById('btnnegative').addEventListener('click', negative, false);
document.getElementById('btncaret').addEventListener('click', exponentiation, false);
document.getElementById('btnrooting').addEventListener('click', root, false);
document.getElementById('btnpercentage').addEventListener('click', percentage, false);
document.getElementById('btnrpn').addEventListener('click', rPN, false);
document.getElementById('btnbinary').addEventListener('click', binary, false);
document.getElementById('btnhex').addEventListener('click', hex, false);