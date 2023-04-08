const scriptURL =
    "https://script.google.com/macros/s/AKfycbyhX890c_4hb1cMdHzwxU2Z5eOG5n1VBe12ABSaESmDwWlpEV2nD310Xe_yD4MJby46/exec";
const form = document.forms["fikti-career"];

form.addEventListener("submit", (e) => {
    e.preventDefault();
    fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => console.log("Success!", response))
        .catch((error) => console.error("Error!", error.message));
});
