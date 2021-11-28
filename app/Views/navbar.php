<header>
    <nav >
        <br>
        <!-- <a href="/"><img src="/img/logo-1.png" alt="" class="logo"></a> -->
        <!-- <a href="/" class="heading-secondary" style="padding: 0; margin: 0;">Cooperativ</a> -->
        <ul class="nav-ul">
            <!-- <li><a href="/"><img src="/img/logo-1.png" alt="" class="logo" style="margin-right: 10rem;"></a></li> -->
        <?php if(!session()->get('isLoggedIn')) : ?>
            <li><a href="/">Home</a></li>
            <li><a href="/about">Tentang Koperasi</a></li>
            <li><a href="/services">Layanan</a></li>            
            <li><a href="/membership">Keanggotaan</a></li>
            <li><a href="/contact">Hubungi Kami</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup" class="btn" id="nav-btn">Daftar</a></li>
            <!-- <li><a href="/logout">Logout</a></li> -->
        <?php else : ?>
            <?php if(session()->get('level') === '1') : ?>
                <!-- <li><a href="/">Home</a></li> -->
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/simpanan">Simpanan</a></li>
                <li><a href="/pinjaman">Pinjaman</a></li>
                <li><a href="/profile">Profil</a></li>
                <li><a href="/logout" class="btn" id="nav-btn">Logout</a></li>
            <?php elseif(session()->get('level') === '2') : ?>
                <!-- <li><a href="/">Home</a></li> -->
                <!-- <li><a href="/admin">Admin</a></li> -->
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/logout" class="btn" id="nav-btn">Logout</a></li>
            <?php endif; ?>
            <?php endif; ?>
        </ul>
    </nav>
</header>