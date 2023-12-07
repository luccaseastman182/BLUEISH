```javascript
// Main.js

// Importing helper functions
import * as helpers from './Helpers.js';

// Initializing the application
document.addEventListener('DOMContentLoaded', (event) => {
    initApp();
});

// Function to initialize the application
function initApp() {
    // Attaching event listeners to forms
    document.querySelector('#userForm').addEventListener('submit', submitUserForm);
    document.querySelector('#scheduleForm').addEventListener('submit', submitScheduleForm);
    document.querySelector('#shiftForm').addEventListener('submit', submitShiftForm);
}

// Function to handle user form submission
function submitUserForm(event) {
    event.preventDefault();
    // Collecting form data
    let formData = new FormData(event.target);
    // Calling helper function to send form data to server
    helpers.sendData('Private/Controllers/User_Controller.php', formData);
}

// Function to handle schedule form submission
function submitScheduleForm(event) {
    event.preventDefault();
    // Collecting form data
    let formData = new FormData(event.target);
    // Calling helper function to send form data to server
    helpers.sendData('Private/Controllers/Schedule_Controller.php', formData);
}

// Function to handle shift form submission
function submitShiftForm(event) {
    event.preventDefault();
    // Collecting form data
    let formData = new FormData(event.target);
    // Calling helper function to send form data to server
    helpers.sendData('Private/Controllers/Shift_Controller.php', formData);
}
```