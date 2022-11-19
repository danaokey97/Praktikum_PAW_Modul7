@extends('contact')
@section ('main')
<title>About me</title>
<link rel="stylesheet" href={{ asset('css/style.css')}}>
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #9d9ec9;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="nav-link" style="color: black;">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" {{url('contacts/create')}}" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="btn btn-success active">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class=" col-md-12 " style=" margin-top: 50px; color:#9d9ec9;">
        <h2> About Me</h2>
        <center>
            <div class="card mt-4 border-0" style="width: 700px; text-align:center;  ">
                <img src={{ asset('img/foto.jpg')}} class="rounded mx-auto d-block" alt="..." width="200">
                <h3 style="margin-top: 10px;">Adz Dzikry Pradana Putra</h3>
            </div>
        </center>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#9d9ec9;"> Background</h2>
        <p style="text-align: justify;"> Haii, Perkenalkan nama saya Adz Dzikry Pradana Putra, biasanya saya dipanggil dana . Saya lahir
            pada Tanggal 25 September 2002 yang identik dengan sejarah indonesia Yaitu G30SPKI. Saaya Berasal dari kota Gresik, atau sering dijuluki sebagai Kota santri atau kota industri. Saya adalah anak pertama dari tiga bersaudara.
            Saya adalah Mahasiswa Teknik Informatika angkatan 2021,  
            Sebenarnya saya sangat ingin melanjutkan bangku kuliah di surabaya , namun hasil dari tes  SBMPTN tidak cukup memuaskan tetapi alhamdulillahnya masih diterima di universitas negeri yaitu Universitas Trunojoyo Madura dan memilih jurusan Teknik informatika , karna saya sangat meminati ilmu dalam bidang komputer</p>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#9d9ec9;"> Suka Duka Praktikum PAW</h2>
        <p style="text-align: justify;">Pada Awal Pertemuan saya sangat suka dengan praktikum PAW ini , mungkin karna belum ditambah dengan tugas-tugas mata kuliah lainnya , seiring berjalannya waktu dan ditambah tugas-tugas mata kuliah yang lainnya , saya merasakan kesusahan dalam mengatur waktu antara praktikum dan tugas mata kuliah lainnya . Dan juga pada akhir-akhir pertemuan ini saya sangat kesusahan dalam memahami materi yang disampaikan oleh asprak-asprak ini , karna cara pengajaran asprak sangat cepat dan saya sendiri adalah orang yang pemalu untuk bertanya.
        Mungkin saran dari saya untuk asprak-asprak tercinta ini tetap semangat dalam menjalankan kuliahnya ditambah tanggung jawab menjadi asprak , dan juga memperhatikan cara pengajaran kakak-kakak jangan begitu cepat-cepat kak!, karna saya sendiri masih awam dalam ilmu baru ini
     Tetapi saya sangat sangat berterima kasih pada seluruh tim asprak PAW C ini, Terima Kasih Banyak atas ilmu yang telah disampaikan pada kami.</p>
    </div>
</div>

@endsection