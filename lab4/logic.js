function validateName() {
    var nameInput=document.getElementsByTagName("input")[0];
    var name=nameInput.value.trim();

    
    if(name==="") {
        alert("Name cannot be empty.");
        return false;
    }

    var words=name.split(" ").filter(function(word) {
        return word!=="";
    });

    if(words.length<2) {
        alert("Name must contain at least two words.");
        return false;
    }

    var firstChar=name.charAt(0);
    if(!((firstChar>='A' && firstChar<='Z') || 
          (firstChar>='a' && firstChar<='z'))) {
        alert("Name must start with a letter.");
        return false;
    }

    for(var i=0; i<name.length; i++) {
        var ch=name.charAt(i);

        var isLetter=(ch>='A' && ch<='Z') || 
                       (ch>='a' && ch<='z');
        var isDot=ch==='.';
        var isDash=ch==='-';
        var isSpace=ch===' ';

        if(!(isLetter || isDot || isDash || isSpace)) {
            alert("Only letters, dot(.), dash(-) are allowed.");
            return false;
        }
    }

    alert("Valid Name");
    return true;
}


function validateEmail() {
    var emailInput=document.getElementsByTagName("input")[0];
    var email=emailInput.value.trim();


    if(email==="") {
        alert("Email empty.");
        return false;
    }




    var atIndex=email.indexOf("@");
    var lastAtIndex=email.lastIndexOf("@");

    if(atIndex<=0 || atIndex!==lastAtIndex) {
        alert("Invalid email format.");
        return false;
    }


    var dotIndex=email.indexOf(".", atIndex);

    if(dotIndex<=atIndex+1 || dotIndex===email.length-1) {
        alert("Invalid email format.");
        return false;
    }


    if(email.indexOf(" ")!==-1) {
        alert("Email cannot contain spaces.");
        return false;
    }

    alert("Valid Email!");
    return true;
}


function validateGender() {
    var radios=document.getElementsByName("gender");
    var isSelected=false;

    for(var i=0; i<radios.length; i++) {
        if(radios[i].checked) {
            isSelected=true;
            break;
        }
    }

    if(!isSelected) {
        alert("Please select at least one gender option.");
        return false;
    }

    alert("Gender selected successfully!");
    return true;
}


function validateDOB() {
    var dateInput=document.getElementsByTagName("input")[0];
    var value=dateInput.value;


    if(value==="") {
        alert("Date of Birth cannot be empty.");
        return false;
    }


    var parts=value.split("-");

    var year=parseInt(parts[0]);
    var month=parseInt(parts[1]);
    var day=parseInt(parts[2]);


    if(year<1900 || year>2026) {
        alert("Year must be between 1900 and 2026.");
        return false;
    }


    if(month<1 || month>12) {
        alert("Month must be between 1 and 12.");
        return false;
    }


    if(day<1 || day>31) {
        alert("Day must be between 1 and 31.");
        return false;
    }

    alert("Valid Date of Birth!");
    return true;
}


function validateDegree() {
    var checkboxes=document.getElementsByName("degree");
    var isChecked=false;

    for(var i=0; i<checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            isChecked=true;
            break;
        }
    }

    if(!isChecked) {
        alert("Please select at least one degree.");
        return false;
    }

    alert("Degree selected successfully!");
    return true;
}


function validateBloodGroup() {
    var select=document.getElementById("blood_group");
    var value=select.value;


    if(value==="" || value===null) {
        alert("Please select a blood group.");
        return false;
    }

    alert("Blood group selected successfully!");
    return true;
}


function validateProfile() {

    var inputs=document.getElementsByTagName("input");

    var userId=inputs[0].value.trim();  
    var fileInput=inputs[1];             

    if(userId==="") {
        alert("User ID cannot be empty.");
        return false;
    }

    var number=Number(userId);

    if(isNaN(number) || number<=0 || userId.indexOf(".")!==-1) {
        alert("User ID must be a positive number.");
        return false;
    }

    if(fileInput.value==="") {
        alert("Please select a picture.");
        return false;
    }

    alert("Profile submitted successfully!");
    return true;
}

function validateForm() {

    if(!validateName()) return false;
    if(!validateEmail()) return false;
    if(!validateGender()) return false;
    if(!validateDOB()) return false;
    if(!validateBloodGroup()) return false;
    if(!validateDegree()) return false;
    if(!validateProfile()) return false;

    return true; 
}