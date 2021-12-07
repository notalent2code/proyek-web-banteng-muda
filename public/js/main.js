function generateNoAnggota() {
    let noAnggota = '14081020'
    let n = Math.floor(Math.random() * 1000) + 1;
    let tempNo = ('0000' + n).slice(-4);
    let tempStr = noAnggota.concat(tempNo);
    
    document.getElementById('no_anggota').value = tempStr;
}

function generateNoSimpanan(){
    let noSimpanan = 'S'
    let n = Math.floor(Math.random() * 1000) + 1;
    let tempNo = ('0000' + n).slice(-4);
    let tempStr = noSimpanan.concat(tempNo);

    document.getElementById('no_simpanan').value = tempStr;
}

function hitungProfit(){
    let bs = document.getElementById('besar_simpanan').value;
    let profit = bs * 0.1;
    document.getElementById('profit').value = profit;
}

function generateNoPinjaman(){
    let noPinjaman = 'P'
    let n = Math.floor(Math.random() * 1000) + 1;
    let tempNo = ('0000' + n).slice(-4);
    let tempStr = noPinjaman.concat(tempNo);

    document.getElementById('no_pinjaman').value = tempStr;
}

function generateNoAngsuran(){
    let noAngsuran = 'A'
    let n = Math.floor(Math.random() * 1000) + 1;
    let tempNo = ('0000' + n).slice(-4);
    let tempStr = noAngsuran.concat(tempNo);

    document.getElementById('no_angsuran').value = tempStr;
}

function formatRupiah(angka){
    var prefix = 'Rp. '
		
    var	reverse = angka.toString().split('').reverse().join('');
    var ribuan 	= reverse.match(/\d{1,3}/g);
    ribuan	= ribuan.join('.').split('').reverse().join('');

    // document.write(prefix.concat(ribuan))
    document.getElementsByClassName('format-rupiah').value = prefix.concat(ribuan)
}

// console.log(formatRupiah(5000000));
