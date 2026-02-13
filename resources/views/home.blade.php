<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Mei Linda Deny</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <style>
        :root {
            --primary-color: #1e3a8a;
            --secondary-color: #000000;
            --accent-color: #3b82f6;
            --text-color: #ffffff;
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            --border-radius: 20px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 25px 0;
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: var(--shadow);
            z-index: 1000;
            transition: var(--transition);
        }

        nav.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
        }

        .logo {
            font-size: 22px;
            font-weight: 600;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--accent-color);
            transform: translateY(-2px);
        }

        section {
            padding: 120px 0;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 0.8s ease forwards;
        }

        section:nth-of-type(1) {
            animation-delay: 0.2s;
        }

        section:nth-of-type(2) {
            animation-delay: 0.4s;
        }

        section:nth-of-type(3) {
            animation-delay: 0.6s;
        }

        section:nth-of-type(4) {
            animation-delay: 0.8s;
        }

        section:nth-of-type(5) {
            animation-delay: 1s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            position: relative;
            overflow: hidden;
        }

        .hero img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 30px;
            border: 5px solid rgba(59, 130, 246, 0.3);
            box-shadow: var(--shadow);
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
        }

        .btn {
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            margin: 10px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-color), var(--primary-color));
            color: #fff;
        }

        .btn-secondary {
            border: 2px solid rgba(255, 255, 255, 0.8);
            color: white;
            background: transparent;
        }

        .about {
            display: flex;
            gap: 60px;
            align-items: center;
            background: var(--card-bg);
            padding: 60px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .about img {
            width: 300px;
            border-radius: var(--border-radius);
        }

        .about p {
            flex: 1;
            text-align: justify;
            font-size: 18px;
            line-height: 1.8;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--accent-color);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 15px;
        }

        .modal span {
            position: absolute;
            top: 30px;
            right: 40px;
            font-size: 40px;
            color: #fff;
            cursor: pointer;
        }

        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            text-align: center;
            padding: 30px;
        }

        @media (max-width: 768px) {
            .about {
                flex-direction: column;
                padding: 30px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .section-title {
                font-size: 28px;
            }
        }

        @media print {

            body {
                background: white;
                color: black;
                font-size: 12pt;
            }

            img,
            .hero img,
            .btn,
            nav,
            footer {
                display: none !important;
            }

            .container {
                width: 100%;
                margin: 0;
                padding: 0;
            }

            h1,
            h2,
            h3 {
                color: black;
            }

            a {
                color: black;
                text-decoration: none;
            }
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin: 25px 0;
        }

        .social-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f3f4f6;
            color: #111827;
            font-size: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icon:hover {
            background: #4f46e5;
            /* modern indigo */
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.3);
        }

        /* ================= MOBILE RESPONSIVE ================= */

        .menu-toggle {
            display: none;
            font-size: 26px;
            cursor: pointer;
            color: white;
        }

        /* Tablet */
        @media (max-width: 992px) {
            .about {
                flex-direction: column;
                text-align: center;
            }

            .about img {
                width: 100%;
                max-width: 350px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero img {
                width: 160px;
                height: 160px;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {

            nav.container {
                padding: 0 20px;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                position: absolute;
                top: 80px;
                right: 0;
                width: 100%;
                background: #1e293b;
                flex-direction: column;
                align-items: center;
                gap: 20px;
                padding: 20px 0;
                display: none;
            }

            .nav-links.active {
                display: flex;
            }

            .hero {
                padding: 100px 20px;
                min-height: auto;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }

            .btn {
                padding: 12px 20px;
                font-size: 14px;
            }

            .section-title {
                font-size: 24px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 20px;
            }

            .card img {
                height: 180px;
            }

            section {
                padding: 80px 0;
            }
        }

        .project-card {
            text-align: left;
            transition: all 0.4s ease;
        }

        .project-card p {
            font-size: 15px;
            margin: 15px 0 20px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.85);
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.3);
        }

        /* ===== EXPERIENCE HOVER EFFECT ===== */

        #experience .card {
            position: centered;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        #experience .card img {
            transition: transform 0.4s ease;
        }

        /* Hover naik + shadow */
        #experience .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(59, 130, 246, 0.35);
        }

        /* Zoom gambar saat hover */
        #experience .card:hover img {
            transform: scale(1.08);
        }

        /* Overlay gelap */
        #experience .card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9), rgba(0, 0, 0, 0.1));
            opacity: 0;
            transition: 0.4s ease;
        }

        /* Overlay muncul saat hover */
        #experience .card:hover::after {
            opacity: 1;
        }

        /* Judul di tengah overlay */
        #experience .card h3 {
            position: centerd;
            bottom: 20px;
            left: 20px;
            margin: 0;
            z-index: 2;
            color: white;
            font-size: 20px;
            transition: 0.4s ease;
        }

        /* Animasi teks naik */
        #experience .card:hover h3 {
            transform: translateY(-5px);
        }

        /* Center button di project card */
        .project-card .btn {
            display: block;
            width: fit-content;
            margin: 20px auto 0 auto;
        }

        .project-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            text-align: left;
        }

        /* Supaya grid card punya tinggi sama */
        #projects .grid {
            align-items: stretch;
        }

        /* Isi teks fleksibel */
        .project-card p {
            flex-grow: 1;
            font-size: 15px;
            margin: 15px 0 20px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.85);
        }

        /* Button tetap di bawah dan center */
        .project-card .btn {
            align-self: center;
            margin-top: auto;
        }

        #experience .card::after {
            pointer-events: none;
        }

        .contact-modal-content {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: var(--shadow);
        }

        .contact-modal-content h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-modal-content form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-modal-content input,
        .contact-modal-content textarea {
            padding: 12px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 25px;
            cursor: pointer;
        }

        /* ===== CONTACT MODAL PREMIUM ANIMATION ===== */

        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;

            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        /* Saat aktif */
        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        /* Card modal */
        .contact-modal-content {
            background: rgba(30, 41, 59, 0.9);
            backdrop-filter: blur(20px);
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);

            transform: scale(0.8) translateY(30px);
            opacity: 0;
            transition: all 0.4s ease;
        }

        /* Saat modal aktif */
        .modal.active .contact-modal-content {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>

    <header>
        <nav class="container">
            <div class="logo">Mei Linda Deny</div>
            <ul class="nav-links">
                <li><a href="#about">Tentang</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#experience">Pengalaman</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>

        </nav>
    </header>

    <section class="hero">
        <div>
            <img src="assets/images/profil.jpg" alt="Profil Mei Linda Deny">
            <h1>PORTOFOLIO MEI LINDA DENY</h1>
            <a href="#experience" class="btn btn-primary">Lihat Pengalaman</a>
            <button class="btn btn-secondary" onclick="openContactModal()">
                Hubungi Saya
            </button>

        </div>
    </section>

    <section id="about" class="container">
        <h2 class="section-title">Tentang Saya</h2>
        <div class="about">
            <img src="assets/images/foto.jpeg" alt="Tentang Mei Linda Deny">
            <p>
                Saya adalah fresh graduate Program Studi Sistem Informasi yang terbiasa menggabungkan pemikiran logis
                dan kreativitas dalam setiap pekerjaan.
                Selama masa perkuliahan, saya telah mengerjakan beberapa proyek, di antaranya pengembangan sistem
                pengelolaan vendor BCA berbasis web menggunakan Laravel pada mata kuliah Rekayasa Perangkat Lunak,
                serta pembuatan website pengelolaan data jemaat
            </p>
        </div>
    </section>

    <section id="skills" class="container">
        <h2 class="section-title">Keahlian</h2>
        <div class="grid">
            <div class="card">
                <i class="fas fa-palette fa-3x"></i>
                <h3>UI/UX Design</h3>
            </div>
            <div class="card">
                <i class="fas fa-chart-bar fa-3x"></i>
                <h3>Data Analyst</h3>
            </div>
            <div class="card">
                <i class="fas fa-bullhorn fa-3x"></i>
                <h3>Digital Marketing</h3>
            </div>
            <div class="card">
                <i class="fas fa-users fa-3x"></i>
                <h3>Teamwork</h3>
            </div>
        </div>
    </section>

    <section id="experience" class="container">
        <h2 class="section-title">Pengalaman Kampus</h2>
        <div class="grid">
            <div class="card">
                <img src="assets/images/bem.jpg" alt="BEM FTI UKDW" onclick="openModal(this.src)">
                <h3>Kepada Departmen Sosial Mahasiswa BEM FTI UKDW</h3>
            </div>
            <div class="card">
                <img src="assets/images/FtiCamp.png" alt="Ketua Camp FTI" onclick="openModal(this.src)">
                <h3>Ketua Camp FTI</h3>
            </div>
            <div class="card">
                <img src="assets/images/UkmTaekwondo.jpeg" alt="UKM Taekwondo" onclick="openModal(this.src)">
                <h3>Sekretaris UKM Taekwondo</h3>
            </div>
            <div class="card">
                <img src="assets/images/pasneka.jpg" alt="Pasar Kebhinekaan" onclick="openModal(this.src)">
                <h3>Anggota Humas Pasar Kebhinekaan</h3>
            </div>
            <div class="card">
                <img src="assets/images/vinix.png" alt="Vinix" onclick="openModal(this.src)">
                <h3>Magang Data Sains Vinix7</h3>
            </div>
            <div class="card">
                <img src="assets/images/bethesda.jpg" alt="RS Bethesda" onclick="openModal(this.src)">
                <h3>Magang Team IT Fullstack<br>RS Bethesda</h3>
            </div>
        </div>
    </section>
    <section id="projects" class="container">
        <h2 class="section-title">Project Experience</h2>

        <div class="grid">

            <!-- Project 1 -->
            <div class="card project-card">
                <h3>Pengembangan Sistem Pengelolaan Data Jemaat GKJ</h3>
                <p>
                    Sistem berbasis web untuk mengelola data jemaat secara terstruktur dan terintegrasi.
                    Dikembangkan menggunakan Laravel untuk meningkatkan efisiensi pengelolaan data dan
                    kemudahan akses informasi bagi admin gereja.
                </p>
                <a href="https://drive.google.com/drive/folders/1mLuIXetNjclttSaNqcZ8NJGUp7BFb8yH?hl=id" target="_blank"
                    class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

            <!-- Project 2 -->
            <div class="card project-card">
                <h3>Sistem Rekam Medis Anamnesis Pasien - RS Bethesda</h3>
                <p>
                    Sistem rekam medis anamnesis pasien berbasis web yang digunakan oleh dokter
                    untuk mencatat riwayat pemeriksaan pasien secara digital.
                    Dibangun menggunakan Laravel, PHP, CSS, dan JavaScript.
                </p>
                <a href="https://github.com/mlndadny/rs-bethesda.git" target="_blank" class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

            <!-- Project 3 -->
            <div class="card project-card">
                <h3>Skripsi: Perancangan Antarmuka Layanan Jasa Kebersihan Kamar Berbasis Mobile</h3>
                <p>
                    Perancangan UI/UX aplikasi layanan jasa kebersihan kamar berbasis mobile
                    dengan pendekatan user-centered design.
                    Prototype dirancang menggunakan Figma dengan fokus pada usability dan experience.
                </p>
                <a href="https://www.figma.com/design/lUkWhzK5HkSRCLj05NAUNc/Tugas-Akhir-Mei-Linda-Deny?node-id=0-1&t=w2xdFpeebaUN07Lx-1"
                    target="_blank" class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

            <!-- Project 4 -->
            <div class="card project-card">
                <h3>Perancangan Aplikasi Kontrol Habis Berbasis Mobile</h3>
                <p>
                    Perancangan UI/UX aplikasi kontrol habid berdasarkan kebiasaan berbasis mobile
                    dengan pendekatan user-centered design.
                    Prototype dirancang menggunakan Figma dengan fokus pada usability dan experience.
                </p>
                <a href="https://www.figma.com/design/9izPKpuCwxmuSZKLlEvC0Q/DEA?node-id=0-1&t=4cbalyxP8DGXICnY-1"
                    target="_blank" class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

            <!-- Project 4 -->
            <div class="card project-card">
                <h3>Perancangan Ulang Sistem Fakultas Teknologi Informasi UKDW Berbasis Web</h3>
                <p>
                    Perancangan ulang sistem Fakultas Teknologi Informasi Universitas Kristen Duta Wacana (UKDW)
                    berbasis web menggunakan Figma untuk menciptakan antarmuka yang lebih intuitif, responsif, dan
                    user-friendly.
                </p>
                <a href="https://www.figma.com/design/zYu6gYaxcJsWBY6x9bg2bB/FTI-UKDW?node-id=0-1&t=pQLITBOdhQQTgNwi-1"
                    target="_blank" class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

             <!-- Project 5 -->
            <div class="card project-card">
                <h3>Perancangan Antarmuka Aplikasi Tracking Habit Berbasis Mobile</h3>
                <p>
                    Proyek ini merupakan perancangan antarmuka aplikasi tracking habit berbasis mobile yang dibuat menggunakan Figma untuk menghasilkan wireframe dan prototype interaktif. Pengujian dilakukan dengan metode Unmoderated Remote Usability Testing, di mana pengguna mencoba prototype secara mandiri untuk mengevaluasi kemudahan penggunaan, kejelasan navigasi, dan efektivitas fitur, kemudian hasilnya digunakan sebagai dasar perbaikan desain agar lebih intuitif dan user-friendly.
                </p>
                <a href="https://www.figma.com/design/9izPKpuCwxmuSZKLlEvC0Q/DEA?node-id=0-1&t=HmoxAAdjohbjdTv1-1"
                    target="_blank" class="btn btn-primary">
                    Lihat Project
                </a>
            </div>

        </div>
    </section>


    <section id="contact" class="container">
        <h2 class="section-title">Kontak</h2>

        <div class="social-icons">

            <a href="mailto:meilindadeny@gmail.com" target="_blank" class="social-icon" title="Email">
                <i class="fas fa-envelope"></i>
            </a>

            <a href="https://instagram.com/mlnda_dny" target="_blank" class="social-icon" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://www.linkedin.com/in/mei-linda-deny-a36a3224a/" target="_blank" class="social-icon"
                title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>

        </div>

    </section>

    <footer>
        <p>© 2026 Mei Linda Deny</p>
    </footer>

    <div class="modal" id="imgModal">
        <span onclick="closeModal()">×</span>
        <img id="modalImg" alt="Modal Image">
    </div>
    <!-- CONTACT MODAL -->
    <div class="modal" id="contactModal">
        <div class="contact-modal-content">
            <span onclick="closeContactModal()" class="close-btn">×</span>
            <h2>Kirim Email</h2>

            <form id="contactForm">

                <label>From (Nama Perusahaan)</label>
                <input type="text" id="name" placeholder="Masukkan nama perusahaan" required>

                <label>To</label>
                <input type="email" value="meilindadeny@gmail.com" readonly>

                <label>Email HR</label>
                <input type="email" id="fromEmail" placeholder="Masukkan email HR" required>

                <label>Pesan</label>
                <textarea id="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>

                <button type="submit" class="btn btn-primary">
                    Kirim Pesan
                </button>

            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

    <script>

        function openContactModal() {
            document.getElementById("contactModal").classList.add("active");
        }

        function closeContactModal() {
            document.getElementById("contactModal").classList.remove("active");
        }

        function openModal(src) {
            document.getElementById("imgModal").style.display = "flex";
            document.getElementById("modalImg").src = src;
        }

        function closeModal() {
            document.getElementById("imgModal").style.display = "none";
        }

        function toggleMenu() {
            document.querySelector(".nav-links").classList.toggle("active");
        }

        (function () {
            emailjs.init("hdDipukIKDxxxrS2O");
        })();

        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const name = document.getElementById("name").value;
            const fromEmail = document.getElementById("fromEmail").value;
            const message = document.getElementById("message").value;

            emailjs.send("service_qha4ntm", "template_uwyrztl", {
                name: name,
                from_email: fromEmail,
                message: message
            }).then(function () {

                alert("Pesan berhasil dikirim!");
                closeContactModal();
                document.getElementById("contactForm").reset();

            }, function (error) {

                alert("Gagal mengirim pesan.");
                console.log(error);

            });
        });
    </script>

</body>

</html>
