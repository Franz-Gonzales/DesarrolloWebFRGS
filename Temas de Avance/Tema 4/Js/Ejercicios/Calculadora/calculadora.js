let displayValue = '0';

// Function update
function updateDisplay() {
  document.getElementById('display').innerText = displayValue;
}

//! function apepen
function appendToDisplay(value) {
  if (displayValue === '0') {
    displayValue = value;
  } else {
    displayValue += value;
  }
  updateDisplay();
}

//* function cleardisplay
function clearDisplay() {
  displayValue = '0';
  updateDisplay();
}


//? function calculate result
function calculateResult() {
  try {
    displayValue = eval(displayValue).toString();
    updateDisplay();
  } catch (error) {
    displayValue = 'Error';
    updateDisplay();
  }
}

// Todo: this is todo.

