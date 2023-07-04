<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Dasar Ajax</title>
</head>
<body>
    <h1>DATA PEMINJAM BUKU </h1>
    <br>
    <button id="btn-clear" onclick="clearResult()">Sembunyikan Table</button>
    <div id="pinjam"></div>
    <br>
    <button onclick="loadContent()">LIHAT TABLE</button>

    <script>
        function loadContent(){
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/PWL5/tugaskelompok/awalpinjam.php";
            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("pinjam").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }

        function clearResult() {
            document.getElementById("pinjam").innerHTML = "";
        }
    </script>
    
    <h1>DATA BUKU </h1>
    <br>
    <button id="btn-clear" onclick="clearResult2()">Sembunyikan Table</button>
    <div id="buku"></div>
    <br>
    <button onclick="loadContent2()">LIHAT TABLE</button>

    <script>
        function loadContent2(){
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/PWL5/tugaskelompok/awalbuku.php";
            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("buku").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }

        function clearResult2() {
            document.getElementById("buku").innerHTML = "";
        }
    </script>

<h1>DATA PENGGUNA PERPUSTAKAAN</h1>
    <br>
    <button id="btn-clear" onclick="clearResult3()">Sembunyikan Table</button>
    <div id="pengguna"></div>
    <br>
    <button onclick="loadContent3()">LIHAT TABLE</button>

    <script>
        function loadContent3(){
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/PWL5/tugaskelompok/awalpengguna.php";
            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("pengguna").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }

        function clearResult3() {
            document.getElementById("pengguna").innerHTML = "";
        }
    </script>
</body>
</html>