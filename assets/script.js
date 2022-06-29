var inputId = document.getElementById("idProduk");
var inputNama = document.getElementById("namaProduk");
var inputJml = document.getElementById("jmlBeli");
var inputHarga = document.getElementById("hargaProduk");

function hitungTotal(harga, jumlah) {
  //   const kualitasA = 5000;
  //   const kualitasC = -5000;
  // const kualitasB = 0

  total = harga * jumlah;
  return total;
}

function tambahRiwayat(buah, jumlah, harga, kualitas) {
  var tr = document.createElement("tr");

  var td = document.createElement("td");
  var item = document.createTextNode(buah);
  td.appendChild(item);
  tr.appendChild(td);

  var td = document.createElement("td");
  var item = document.createTextNode(jumlah);
  td.appendChild(item);
  tr.appendChild(td);

  var td = document.createElement("td");
  var item = document.createTextNode(kualitas);
  td.appendChild(item);
  tr.appendChild(td);

  var td = document.createElement("td");
  var item = document.createTextNode(harga);
  td.appendChild(item);
  tr.appendChild(td);

  var td = document.createElement("td");
  var item = document.createTextNode(getDate());
  td.appendChild(item);
  tr.appendChild(td);

  document.getElementById("list-transaksi").innerHTML += tr.outerHTML;
}

function kurangData(posisi, jml) {
  clearData();
  for (var i = 0; i < jml; i++) {
    Buah.stok[posisi]--;
  }
  cetakDataBuah();
}

function addProduk() {
  var namaProduk = inputNama.value;
  var jmlBeli = inputJml.value;
  var hargaProduk = inputHarga.value;

  //   var posisi = Buah.nama.indexOf(namaBuah);
  //   var hargaBuah = Buah.harga[posisi];

  //   var diskon;
  //   if (jmlBuah > 3) {
  //     diskon = Buah.diskon[posisi];
  //   } else {
  //     diskon = 0;
  //   }

  var hargaTotal = hitungTotal(hargaProduk, jmlBeli);
  //   var sisa = hitungKembalian(uang, hargaTotal);

  if (sisa > 0 && hargaTotal > 0) {
    if (cekStok(posisi, jmlBeli)) {
      tambahRiwayat(namaProduk, jmlBeli, hargaTotal);
      kurangData(posisi, jmlBeli);
    } else {
      alert("Stok buah tidak cukup");
    }
  } else if (sisa == 0 && hargaTotal > 0) {
    if (cekStok(posisi, jmlBeli)) {
      alert("Transaksi berhasil");
      tambahRiwayat(namaProduk, jmlBeli, hargaTotal);
      kurangData(posisi, jmlBeli);
    } else {
      alert("Stok buah tidak cukup");
    }
  }
}
