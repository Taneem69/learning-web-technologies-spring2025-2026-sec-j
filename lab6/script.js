let quantity=document.getElementsByClassName("quantity");

let applePrice=100;
let bananaPrice=50;
let orangePrice=30;
let totlaPrice=0;

function finalPrice(){
    let price=(quantity[0].value * applePrice)+(quantity[1].value * bananaPrice)+(quantity[2].value * orangePrice);
    document.getElementById("totalPrice").value=price;
}


quantity[0].addEventListener("input", function() {

    
    let quantityValue=parseInt(quantity[0].value);
    if(quantityValue<0){
        alert("Quantity is negative");
    }

    else{
        //product value 100tk
        totlaPrice=(quantity[0].value * applePrice);
        finalPrice();
        if(document.getElementById("totalPrice").value>1000){
            alert("you are eligible for gift cupon");
        }
    }
});



quantity[1].addEventListener("input", function() {

    
    let quantityValue=parseInt(quantity[1].value);

    if(quantityValue<0){
        alert("Quantity is negative");
    }

    else{
        
        //product value 50tk
        totlaPrice=(quantity[1].value * bananaPrice);
        finalPrice();

        if(document.getElementById("totalPrice").value>1000){
            alert("you are eligible for gift cupon");
        }

    }
});


quantity[2].addEventListener("input", function() {

    
    let quantityValue=parseInt(quantity[2].value);

    if(quantityValue<0){
        alert("Quantity is negative");
    }

    else{
        
        //product value 30tk
        totlaPrice=(quantity[2].value * orangePrice);
        finalPrice();

        if(document.getElementById("totalPrice").value>1000){
            alert("you are eligible for gift cupon");
        }
    }
});