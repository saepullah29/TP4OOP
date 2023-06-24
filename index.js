function getCountryData() {
  fetch("https://restcountries.com/v3.1/all")
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      createTable(data);
    })
    .catch(function (error) {
      console.log("Error:", error);
    });
}

function createTable(data) {
  var table = document.createElement("table");
  table.classList.add("countries-table");

  // Membuat header tabel
  var thead = document.createElement("thead");
  var headerRow = document.createElement("tr");
  var headers = ["Nama Negara", "Ibukota", "Populasi", "Luas"];

  headers.forEach(function (headerText) {
    var th = document.createElement("th");
    th.appendChild(document.createTextNode(headerText));
    headerRow.appendChild(th);
  });

  thead.appendChild(headerRow);
  table.appendChild(thead);

  // Menambahkan data ke dalam tabel
  var tbody = document.createElement("tbody");
  data.forEach(function (country) {
    var name = country.name.official || "";
    var capital = country.capital || "";
    var population = country.population || "";
    var area = country.area || "";

    var row = document.createElement("tr");
    row.innerHTML =
      "<td>" +
      name +
      "</td>" +
      "<td>" +
      capital +
      "</td>" +
      "<td>" +
      population +
      "</td>" +
      "<td>" +
      area +
      "</td>";

    tbody.appendChild(row);
  });

  table.appendChild(tbody);

  // Menampilkan tabel pada halaman
  document.getElementById("table-container").appendChild(table);
}

getCountryData();
