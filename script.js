function validateForm() {
    var name = document.getElementById('name').value;
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;
    
    if (name === "" || weight === "" || height === "") {
        alert("All fields are required.");
        return false;
    }
    
    if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
        alert("Weight and Height must be valid numbers greater than zero.");
        return false;
    }
    
    return true;
}
