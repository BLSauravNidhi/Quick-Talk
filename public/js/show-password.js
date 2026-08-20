const checkbox = document.getElementById('show-password');

checkbox.addEventListener('click', () => {
    var inputbox = document.querySelectorAll('.password');
    inputbox.forEach((x) => {
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        } 
    });
});