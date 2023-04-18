

function submitIndex() {
    let datainput_1 = document.getElementById("professional_statement").value;
    let datainput_2 = document.getElementById("brief_bio").value;

    let datainput = datainput_1 + "\n" + datainput_2;
    let blobex = new Blob([datainput], { type: "text/plain" });
    let urlex = window.URL.createObjectURL(blobex);
    let anchor = document.createElement("a");
    anchor.href = urlex;
    anchor.download = "index";
    anchor.click();
}

function submitResume() {
    let datainput_1 = document.getElementById("qualifications").value;
    let datainput_2 = document.getElementById("skillset").value;
    let datainput_3 = document.getElementById("awards").value;
    let datainput_4 = document.getElementById("experience").value;
    let datainput_5 = document.getElementById("referees").value;

    let datainput = datainput_1 + "\n" + datainput_2 + "\n" + datainput_3 + "\n" + datainput_4 + "\n" + datainput_5;
    let blobex = new Blob([datainput], { type: "text/plain" });
    let urlex = window.URL.createObjectURL(blobex);
    let anchor = document.createElement("a");
    anchor.href = urlex;
    anchor.download = "resume";
    anchor.click();
}



function submitProjects() {
    let datainput_1 = document.getElementById("my_projects").value;

    let datainput = datainput_1;
    let blobex = new Blob([datainput], { type: "text/plain" });
    let urlex = window.URL.createObjectURL(blobex);
    let anchor = document.createElement("a");
    anchor.href = urlex;
    anchor.download = "projects";
    anchor.click();
}

function readMessages() {
    const fileInput = document.createElement('input');
    fileInput.type = 'file';

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];

        const reader = new FileReader();


        reader.addEventListener('load', (event) => {
            const fileContent = event.target.result;
            document.getElementById("write").innerHTML = fileContent;
        });


        reader.readAsText(file);
    });

    fileInput.click();


}

function submitSocial() {
    let datainput_1 = document.getElementById("social-link-1").value;
    let datainput_2 = document.getElementById("social-link-2").value;
    let datainput_3 = document.getElementById("social-link-3").value;

    let datainput = datainput_1 + "\n" + datainput_2 + "\n" + datainput_3


    let blobex = new Blob([datainput], { type: "text/plain" });
    let urlex = window.URL.createObjectURL(blobex);
    let anchor = document.createElement("a");
    anchor.href = urlex;
    anchor.download = "resume";
    anchor.click();
}

function processLogout() {
    sessionStorage.clear();
}