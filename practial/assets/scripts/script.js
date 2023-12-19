function calculateScholarship() {
    var income = document.getElementById("income").value;

    // check if income has a value and isan integer
    if (income == "" || isNaN(income)) {
        alert("Not a valid number entered or blank");
        return;
    }

    var result = document.getElementById("scholarship-result");

    if (income >= 6000) {
        result.innerHTML = "You are not eligible at this time for a scholarship"
    } else {
        result.innerHTML = "You are eligible for a 50% scholarship!"
    }
}

function validateApplicationForm() {
    let name = document.forms["applicationForm"]["name"].value;
    let email = document.forms["applicationForm"]["email"].value;
    
    if (name == "" || email == "") {
      alert("Name and email must be filled out");
      return false;
    }
    return true;
  }