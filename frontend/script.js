function searchCase() {
    let caseNum = document.getElementById("caseNumber").value;
    let result = document.getElementById("result");

    if(caseNum === "") {
        result.innerHTML = "Please enter case number";
    } else {
        result.innerHTML = "Searching... (Backend connection pending)";
    }
}
