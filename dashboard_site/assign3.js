function submitContactMsg() {
    let datainput_1 = document.getElementById("name").value;
    let datainput_2 = document.getElementById("email").value;
    let datainput_3 = document.getElementById("phone").value;
    let datainput_4 = document.getElementById("message").value;

    let datainput = datainput_1 + "\n" + datainput_2 + "\n" + datainput_3 + "\n" + datainput_4;
    let blobex = new Blob([datainput], { type: "text/plain" });
    let urlex = window.URL.createObjectURL(blobex);
    let anchor = document.createElement("a");
    anchor.href = urlex;
    anchor.download = "contact.txt";
    anchor.click();
}

function processLogin() {
    const user = document.getElementById("username").value;
    const pass = document.getElementById("password").value;

    if (user === "admin" && pass === "admin") {
        const login_time = new Date();
        const user_agent = navigator.userAgent;

        sessionStorage.setItem("username", user);
        sessionStorage.setItem("password", pass);
        sessionStorage.setItem("loginTime", login_time.toString());
        sessionStorage.setItem("userAgent", user_agent);

        window.location.href = "admin_website/adminIndex.html";

    } else {
        alert("Invalid username or password!")
    }

}