function validateForm() {
    let projectName = document.forms["formCreate"]["name"].value;
    let projectSummary = document.forms["formCreate"]["summary"].value;
    let projectType = document.forms["formCreate"]["type"].value;
    let projectDescription = document.forms["formCreate"]["desc"].value;
    if (projectName == "") {
        alert("Name must be filled out");
        return false;
    }
    if (projectType == "") {
        alert("Type must be filled out");
        return false;
    }
    if (projectSummary == "") {
        alert("Summary must be filled out");
        return false;
    }

    if (projectDescription == "") {
        alert("Description must be filled out");
        return false;
    }
    alert("All information add successful");
    return true;
}

function validateForm2() {
    let projectName = document.forms["formCreate2"]["name"].value;
    let projectDescription = document.forms["formCreate2"]["desc"].value;
    if (projectName == "") {
        alert("Name must be filled out");
        return false;
    }
    if (projectDescription == "") {
        alert("Description must be filled out");
        return false;
    }
    alert("All information add successful");
    return true;
}
