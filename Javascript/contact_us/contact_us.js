function generateCaptcha() {
    const num1 = Math.round(Math.random() * 100);
    const num2 = Math.round(Math.random() * 100);
    const captcha = document.getElementById("captcha");
    if (num1 >= num2) {
        captcha.innerHTML = `${num1} - ${num2}`;
    }
    else {
        captcha.innerHTML = `${num2} - ${num1}`;
    }
}

generateCaptcha();