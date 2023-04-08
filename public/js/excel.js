const XLSX = require("xlsx");
const XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;

function getDataFromMySQL() {
    // lakukan request ke server untuk mengambil data dari MySQL
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "/getdata", true);
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            // ubah data yang diterima menjadi objek JSON
            const data = JSON.parse(this.responseText);
            // panggil fungsi untuk membuat file Excel
            createExcelFile(data);
        }
    };
    xhr.send();
}

function createExcelFile(data) {
    // buat workbook baru
    const wb = XLSX.utils.book_new();
    // buat worksheet baru dengan nama "Data"
    const ws = XLSX.utils.json_to_sheet(data);
    XLSX.utils.book_append_sheet(wb, ws, "Data");
    // simpan file Excel ke dalam bentuk binary string
    const wbout = XLSX.write(wb, { bookType: "xlsx", type: "binary" });
    // unduh file Excel ke dalam browser
    saveAs(
        new Blob([s2ab(wbout)], { type: "application/octet-stream" }),
        "data.xlsx"
    );
}

function s2ab(s) {
    const buf = new ArrayBuffer(s.length);
    const view = new Uint8Array(buf);
    for (let i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xff;
    return buf;
}

document
    .getElementById("exportButton")
    .addEventListener("click", getDataFromMySQL);
window.onload = getDataFromMySQL;
