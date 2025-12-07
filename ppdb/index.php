<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - SMK Muhammadiyah 4 Boyolali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="../aset/icon/logo02-smal.png">
    <style>
        @font-face {
            font-family: poppins;
            src: url(../aset/font/Poppins-Regular.ttf);
        }
        body {
            font-family: poppins, sans-serif;
        }
        .navbar-glow {
            box-shadow: 0 10px 30px rgba(0, 70, 220, 0.3);
        }
        .nav-dropdown {
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s;
            backdrop-filter: blur(10px);
        }
        nav > ul > li:hover .nav-dropdown {
            opacity: 1;
            pointer-events: auto;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 50%, #06b6d4 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation: float 20s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(3, 105, 161, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(3, 105, 161, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(3, 105, 161, 0);
            }
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .step {
            text-align: center;
            flex: 1;
        }
        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e0f2fe;
            color: #0369a1;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
            transition: all 0.3s;
        }
        .step:hover .step-number {
            background: #0284c7;
            color: white;
            transform: scale(1.1);
        }
        .feature-card {
            background: linear-gradient(135deg, rgba(3, 169, 244, 0.1), rgba(0, 188, 212, 0.1));
            border-left: 4px solid #0284c7;
        }
        .feature-card:hover {
            border-left: 4px solid #06b6d4;
            transform: translateX(5px);
            transition: all 0.3s;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 h-[10vh] bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-700 flex justify-between items-center px-4 sm:px-[5vh] navbar-glow transition-all duration-300">
        <div class="logo flex items-center h-full">
            <a href="../index.html" class="transform hover:scale-110 transition-transform duration-300 block sm:hidden">
                <img src="../aset/icon/logo02-smal.png" alt="Logo" class="h-12 w-auto">
            </a>
            <a href="../index.html" class="transform hover:scale-105 transition-transform duration-300 hidden sm:block">
                <img src="../aset/icon/logo02.png" alt="Logo" class="h-14 w-auto px-3 py-2 bg-white bg-opacity-90 rounded-[15px] shadow-lg">
            </a>
        </div>
        
        <ul class="flex items-center h-full gap-2">
            <li class="relative group">
                <button class="text-white p-2 sm:p-3 text-3xl sm:text-4xl hover:bg-white hover:bg-opacity-20 rounded-full transition-all duration-300">&#9776;</button>
                <div class="nav-dropdown absolute right-0 top-full pt-2 bg-blue-800 bg-opacity-95 rounded-[15px] min-w-max shadow-2xl">
                    <ul class="py-2">
                        <li class="px-6 py-3 text-left rounded-lg transition-all duration-300 hover:bg-blue-700 group/item">
                            <a href="../sejarah.html" class="text-white block nav-link-hover font-medium text-sm">Sejarah Berdiri</a>
                        </li>
                        <li class="px-6 py-3 text-left rounded-lg transition-all duration-300 hover:bg-blue-700 group/item">
                            <a href="../visimisi.html" class="text-white block nav-link-hover font-medium text-sm">Visi & Misi</a>
                        </li>
                        <li class="px-6 py-3 text-left rounded-lg transition-all duration-300 hover:bg-blue-700 group/item">
                            <a href="../susunan.html" class="text-white block nav-link-hover font-medium text-sm">Susunan Pengurus</a>
                        </li>
                        <li class="px-6 py-3 text-left rounded-lg transition-all duration-300 hover:bg-blue-700 group/item">
                            <a href="../kontak.html" class="text-white block nav-link-hover font-medium text-sm">Kontak</a>
                        </li>
                    </ul>
                </div>   
            </li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="w-full pt-[10vh] hero-gradient relative">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 py-16 sm:py-24">
            <div class="text-center text-white mb-8">
                <div class="inline-block mb-6">
                    <span class="text-6xl">📝</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-4 drop-shadow-lg">
                    Pendaftaran Peserta Didik Baru
                </h1>
                <p class="text-lg md:text-xl text-blue-50 mb-8 drop-shadow-md max-w-2xl mx-auto">
                    Bergabunglah dengan SMK Muhammadiyah 04 Boyolali dan raih masa depan cerah bersama kami
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <div class="bg-white/20 backdrop-blur-md rounded-full px-6 py-3 text-sm font-semibold">
                        Program Terbaik
                    </div>
                    <div class="bg-white/20 backdrop-blur-md rounded-full px-6 py-3 text-sm font-semibold">
                        Fasilitas Lengkap
                    </div>
                    <div class="bg-white/20 backdrop-blur-md rounded-full px-6 py-3 text-sm font-semibold">
                        Guru Profesional
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <div class="w-full bg-white py-16 px-4 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Info Card 1 -->
                <div class="feature-card rounded-xl p-6">
                    <div class="text-4xl mb-4">📅</div>
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Jadwal PPDB</h3>
                    <p class="text-gray-600 text-sm">Pendaftaran dibuka setiap tahun ajaran baru. Cek jadwal lengkapnya!</p>
                </div>

                <!-- Info Card 2 -->
                <div class="feature-card rounded-xl p-6">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">7 Program Keahlian</h3>
                    <p class="text-gray-600 text-sm">Pilih program keahlian sesuai minat dan bakat Anda.</p>
                </div>

                <!-- Info Card 3 -->
                <div class="feature-card rounded-xl p-6">
                    <div class="text-4xl mb-4">💯</div>
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Proses Transparan</h3>
                    <p class="text-gray-600 text-sm">Sistem penilaian yang adil dan transparan untuk semua peserta.</p>
                </div>

                <!-- Info Card 4 -->
                <div class="feature-card rounded-xl p-6">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="font-bold text-gray-800 mb-2 text-lg">Dukungan Penuh</h3>
                    <p class="text-gray-600 text-sm">Konseling dan bimbingan untuk membantu pilihan Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Section -->
    <div class="w-full bg-gradient-to-b from-blue-50 to-cyan-50 py-16 px-4 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Program Keahlian Tersedia</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Program 1 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-orange-500 p-6">
                    <div class="text-4xl mb-3">⚙️</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Mekanik Industri</h3>
                    <p class="text-gray-600 text-sm mb-4">Desain dan produksi sistem mekanik untuk industri modern</p>
                    <span class="inline-block bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">Industri</span>
                </div>

                <!-- Program 2 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-blue-500 p-6">
                    <div class="text-4xl mb-3">🚗</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Otomotif Kendaraan</h3>
                    <p class="text-gray-600 text-sm mb-4">Perawatan dan perbaikan kendaraan dengan teknologi terkini</p>
                    <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Otomotif</span>
                </div>

                <!-- Program 3 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-yellow-500 p-6">
                    <div class="text-4xl mb-3">🏍️</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Sepeda Motor</h3>
                    <p class="text-gray-600 text-sm mb-4">Keahlian khusus perbaikan dan modifikasi sepeda motor</p>
                    <span class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Motor</span>
                </div>

                <!-- Program 4 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-purple-500 p-6">
                    <div class="text-4xl mb-3">💻</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Rekayasa Perangkat Lunak</h3>
                    <p class="text-gray-600 text-sm mb-4">Pengembangan software dan aplikasi digital modern</p>
                    <span class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">IT</span>
                </div>

                <!-- Program 5 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-green-500 p-6">
                    <div class="text-4xl mb-3">👨‍🍳</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Tata Boga (Jasa Boga)</h3>
                    <p class="text-gray-600 text-sm mb-4">Seni memasak profesional dan manajemen restoran</p>
                    <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Kuliner</span>
                </div>

                <!-- Program 6 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-red-500 p-6">
                    <div class="text-4xl mb-3">🎬</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Multimedia</h3>
                    <p class="text-gray-600 text-sm mb-4">Desain grafis, video, dan konten digital kreatif</p>
                    <span class="inline-block bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">Kreatif</span>
                </div>

                <!-- Program 7 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-t-4 border-indigo-500 p-6 md:col-span-2 lg:col-span-1">
                    <div class="text-4xl mb-3">💊</div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Farmasi Klinik</h3>
                    <p class="text-gray-600 text-sm mb-4">Pelayanan farmasi dan kesehatan masyarakat</p>
                    <span class="inline-block bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold">Kesehatan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Section -->
    <div id="form-top" class="w-full bg-white py-16 px-4 sm:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Daftar Sekarang</h2>
                <p class="text-gray-600 text-lg">Isi formulir pendaftaran di bawah ini untuk memulai perjalanan Anda</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 mx-auto mt-4"></div>
            </div>

            <!-- Form Container -->
            <div class="form-container rounded-2xl py-4 px-2 md:p-12">
                <!-- Step Indicator -->
                <div class="step-indicator mb-12">
                    <div class="step">
                        <div class="step-number">1</div>
                        <p class="text-gray-700 font-semibold">Informasi Pribadi</p>
                    </div>
                    <div class="hidden md:block flex-1 border-t-2 border-blue-200 mt-6"></div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <p class="text-gray-700 font-semibold">Pilih Program</p>
                    </div>
                    <div class="hidden md:block flex-1 border-t-2 border-blue-200 mt-6"></div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <p class="text-gray-700 font-semibold">Dokumen</p>
                    </div>
                    <div class="hidden md:block flex-1 border-t-2 border-blue-200 mt-6"></div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <p class="text-gray-700 font-semibold">Konfirmasi</p>
                    </div>
                </div>

                <!-- Google Form Embed -->
                <div class="bg-gray-50 rounded-xl p-0 md:p-8 overflow-hidden">
                    <iframe 
                        src="https://docs.google.com/forms/d/e/1FAIpQLSeF62LkloIbOSIv2lRydiqvv7jDcibaIB3TfHb8BfT4VXeiAw/viewform?embedded=true" 
                        width="100%" 
                        height="1200" 
                        frameborder="0" 
                        marginheight="0" 
                        marginwidth="0"
                        class="rounded-lg"
                        loading="lazy">
                        Loading…
                    </iframe>
                </div>

                <div class="mt-8 p-6 bg-blue-50 rounded-lg border-l-4 border-blue-600">
                    <p class="text-gray-700">
                        <span class="font-semibold text-blue-900">📌 Catatan Penting:</span>
                        <br>Pastikan semua data yang Anda isi sudah benar dan sesuai dengan dokumen asli. 
                        Anda akan menerima konfirmasi melalui email yang terdaftar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="w-full bg-gradient-to-b from-gray-50 to-white py-16 px-4 sm:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 mx-auto"></div>
            </div>

            <div class="space-y-4">
                <details class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <summary class="font-bold text-gray-800 flex justify-between items-center">
                        Kapan jadwal pembukaan pendaftaran PPDB?
                        <span class="text-blue-600">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Jadwal PPDB biasanya dibuka setiap bulan Juni. Pantau website resmi kami untuk update terbaru.</p>
                </details>

                <details class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <summary class="font-bold text-gray-800 flex justify-between items-center">
                        Berapa biaya pendaftaran?
                        <span class="text-blue-600">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Pendaftaran gratis dan terbuka untuk semua calon peserta didik yang tertarik.</p>
                </details>

                <details class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <summary class="font-bold text-gray-800 flex justify-between items-center">
                        Dokumen apa saja yang perlu disiapkan?
                        <span class="text-blue-600">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Siapkan fotokopi ijazah/SKHUN, akta kelahiran, KTP/KKM, dan pas foto ukuran 3x4 (6 lembar).</p>
                </details>

                <details class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <summary class="font-bold text-gray-800 flex justify-between items-center">
                        Bagaimana cara menghubungi admin PPDB?
                        <span class="text-blue-600">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Hubungi kami di (0276) 324016 atau WhatsApp, atau kunjungi kantor kami di Jl. Lembayung No. 4 Boyolali.</p>
                </details>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="w-full bg-gradient-to-r from-blue-600 via-blue-500 to-cyan-600 py-16 px-4 sm:px-8">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Memulai Karir Cemerlang?</h2>
            <p class="text-lg mb-8 text-blue-100">Jangan lewatkan kesempatan emas untuk bergabung dengan SMK Muhammadiyah 04 Boyolali</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#form-top" class="inline-block px-10 py-4 bg-white text-blue-600 font-bold rounded-full shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ">
                    Daftar Sekarang →
                </a>
                <a href="https://wa.me/6281270448656?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20PPDB%20SMK%20Muhammadiyah%2004%20Boyolali" target="_blank" class="inline-block px-10 py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-full shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                        <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                    </svg>   
                    Tanya di WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-full bg-gradient-to-r from-blue-800 via-blue-700 to-indigo-800 text-white py-16 px-4 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- About Section -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="../aset/icon/logo02-smal.png" alt="Logo" class="h-10 w-auto">
                        <h3 class="text-xl font-bold">SMK Muhammadiyah 04 Boyolali</h3>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed">Membangun generasi berkompeten dan berkarakter melalui pendidikan berkualitas</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Navigasi Cepat</h4>
                    <ul class="space-y-3 text-blue-100">
                        <li><a href="#data" class="hover:text-white transition-colors duration-300">Profil Sekolah</a></li>
                        <li><a href="#program" class="hover:text-white transition-colors duration-300">Program Keahlian</a></li>
                        <li><a href="#pengelolaan" class="hover:text-white transition-colors duration-300">Pengelolaan</a></li>
                        <li><a href="#galeri" class="hover:text-white transition-colors duration-300">Galeri</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Kontak Kami</h4>
                    <ul class="space-y-3 text-blue-100 text-sm">
                        <li class="flex items-start gap-3">
                            <span class="text-lg mt-1">📍</span>
                            <span>Jl. Lembayung No. 4<br>Boyolali, Jawa Tengah</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-lg">📞</span>
                            <span>(0276) xxxxxx</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-lg">✉️</span>
                            <span>info@smkm04.sch.id</span>
                        </li>
                    </ul>
                </div>

                <!-- Operating Hours -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Jam Operasional</h4>
                    <ul class="space-y-2 text-blue-100 text-sm">
                        <li class="flex items-center justify-between">
                            <span>Senin - Jumat:</span>
                            <span class="font-semibold">06:30 - 15:30</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span>Sabtu:</span>
                            <span class="font-semibold">06:30 - 13:00</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span>Minggu:</span>
                            <span class="font-semibold">Tutup</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-blue-600 my-8"></div>

            <!-- Social Media & Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Social Media -->
                <div class="flex gap-4">
                    <a href="#" class="group flex p-3 bg-white/20 hover:bg-green-500 rounded-full transition-all duration-300 hover:scale-110">
                        <img src="../aset/icon/wa.png" alt="WhatsApp" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
                    </a>
                    <a href="#" class="group flex p-3 bg-white/20 hover:bg-gradient-to-br hover:from-purple-500 hover:via-pink-500 hover:to-red-500 rounded-full transition-all duration-300 hover:scale-110">
                        <img src="../aset/icon/ig.png" alt="Instagram" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
                    </a>
                    <a href="#" class="group flex p-3 bg-white/20 hover:bg-blue-600 rounded-full transition-all duration-300 hover:scale-110">
                        <img src="../aset/icon/fb.png" alt="Facebook" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
                    </a>
                    <a href="#" class="group flex p-3 bg-white/20 hover:bg-red-600 rounded-full transition-all duration-300 hover:scale-110">
                        <img src="../aset/icon/youtube.png" alt="YouTube" class="w-5 h-5 group-hover:brightness-0 group-hover:invert">
                    </a>
                </div>

                <!-- Copyright & Credits -->
                <div class="text-center md:text-right text-blue-100 text-sm">
                    <p class="mb-1">Copyright © <span id="year"></span> SMK Muhammadiyah 04 Boyolali. All rights reserved.</p>
                    <p>Designed by <a href="https://github.com/JKP5758" class="font-semibold text-white hover:underline">Joko Purnomo</a> | Icon by <a href="https://www.freepik.com" class="text-white hover:underline">Freepik</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281270448656?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20PPDB%20SMK%20Muhammadiyah%2004%20Boyolali" target="_blank" class="fixed bottom-6 right-6 z-40 inline-flex items-center justify-center w-16 h-16 bg-green-500 hover:bg-green-600 rounded-full shadow-2xl hover:shadow-2xl transform hover:scale-110 transition-all duration-300 pulse-ring">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
            <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
        </svg>
    </a>

    <script>
        // Set current year dynamically
        document.getElementById('year').textContent = new Date().getFullYear();

        // FAQ Toggle Enhancement
        document.querySelectorAll('details').forEach(detail => {
            detail.addEventListener('toggle', function() {
                const summary = this.querySelector('summary');
                const icon = summary.querySelector('span');
                if (this.open) {
                    icon.textContent = '−';
                    icon.style.color = '#0284c7';
                } else {
                    icon.textContent = '+';
                    icon.style.color = '#0284c7';
                }
            });
        });

        // Smooth scroll for CTA button
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>

</body>
</html>