var calculaotorBody=document.createElement("div");

//making the calculator body
calculaotorBody.className="calcBody";


calculaotorBody.style.backgroundColor="black";
calculaotorBody.style.height="600PX";
calculaotorBody.style.width="400px";

document.body.appendChild(calculaotorBody);


//creating the display
var display=document.createElement("input");
display.type="text";
display.id="disView";
display.readOnly=true;
calculaotorBody.appendChild(display);



var buttons=["1","2","3","4","5","6","7","8","9","0",".","+","-","*","/","^","C","="];

buttons.forEach(function(buttonText){
    var button=document.createElement("button");
    button.innerText=buttonText;
    button.className=["+", "-", "*", "/", "^", "C", "="].includes(buttonText) ? "operator" : "number";
    calculaotorBody.appendChild(button);

    button.addEventListener("click", function(){
        if(buttonText==="C"){
            display.value="";
        }


        else if(buttonText==="=") {
            let input=display.value;
            let operators=["+", "-", "*", "/", "^"];
            let op="";
                
        
            for(let i=0; i<operators.length; i++) {
                if(input.includes(operators[i])) {
                    op=operators[i];
                    break;
                }
            }
        
            if(op !== "") {
                
                let parts=input.split(op);
                let num1=parseFloat(parts[0]);
                let num2=parseFloat(parts[1]);
                let result=0;
            
                
                switch(op) {
                    case "+": result=num1+num2; break;
                    case "-": result=num1-num2; break;
                    case "*": result=num1*num2; break;
                    case "/": result=num2 !==0 ? num1/num2 : "Error"; break;
                    case "^": result=Math.pow(num1,num2); break;
                }
                display.value=result;

            }
        }

        else{
            display.value+=buttonText;
        }
    });
});



//button styling using js
var allButtons=document.querySelectorAll("button");

allButtons.forEach(function(button){
    if(button.className==="number"){
        button.style.backgroundColor="chartreuse";
        button.style.height="70px";
        button.style.width="70px";
        button.style.fontSize="20px";
    }
    else{
        button.style.backgroundColor="#E4F6A8";
        button.style.height="70px";
        button.style.width="70px";
        button.style.fontSize="20px";
    }
});

document.getElementByClassName("calcBody")[0].style.position="relative";


//display positioning using js
document.getElementById("disView").style.position="absolute";
document.getElementById("disView").style.top="50px";
document.getElementById("disView").style.left="30px";
document.getElementById("disView").style.height="30px";
document.getElementById("disView").style.width="315px";
document.getElementById("disView").style.fontSize="20px";
document.getElementById("disView").style.textAlign="right";
document.getElementById("disView").style.borderRadius="10px";
document.getElementById("disView").style.padding="10px";


//button positioning using js
document.getElementByClassName("number").forEach(function(button){
    button.style.position="absolute";
});


document.getElementById("num0").style.left="30px";
document.getElementById("num0").style.bottom="30px";
document.getElementById("num0").style.width="160px";
document.getElementById("dot").style.bottom="30px";
document.getElementById("dot").style.left="210px";
document.getElementById("num1").style.left="30px";
document.getElementById("num1").style.bottom="120px";
document.getElementById("num2").style.left="120px";
document.getElementById("num2").style.bottom="120px";
document.getElementById("num3").style.left="210px";
document.getElementById("num3").style.bottom="120px";
document.getElementById("num4").style.left="30px";
document.getElementById("num4").style.bottom="210px";
document.getElementById("num5").style.left="120px";
document.getElementById("num5").style.bottom="210px";
document.getElementById("num6").style.left="210px";
document.getElementById("num6").style.bottom="210px";
document.getElementById("num7").style.left="30px";
document.getElementById("num7").style.bottom="300px";
document.getElementById("num8").style.left="120px";
document.getElementById("num8").style.bottom="300px";
document.getElementById("num9").style.left="210px";
document.getElementById("num9").style.bottom="300px";
document.getElementById("equal").style.left="30px";
document.getElementById("equal").style.bottom="390px";
document.getElementById("clear").style.left="120px";
document.getElementById("clear").style.bottom="390px";






document.getElementByClassName("operator").forEach(function(button){
    button.style.position="absolute";
});

document.getElementById("div").style.left="300px";
document.getElementById("div").style.bottom="390px";
document.getElementById("add").style.left="300px";
document.getElementById("add").style.bottom="30px";
document.getElementById("add").style.height="160px";
document.getElementById("sub").style.left="300px";
document.getElementById("sub").style.bottom="210px";
document.getElementById("mul").style.left="300px";
document.getElementById("mul").style.bottom="300px";
document.getElementById("pow").style.left="210px";
document.getElementById("pow").style.bottom="390px";









