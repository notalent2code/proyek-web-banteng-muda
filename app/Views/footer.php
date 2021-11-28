<footer>
    <div class="footer">
        <div class="footer-icons">
            <a href="#"><img src="/img/icon-facebook.svg" alt=""></a>
            <a href="#"><img src="/img/icon-twitter.svg" alt=""></a>
            <a href="#"><img src="/img/icon-instagram.svg" alt=""></a>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="/about">Tentang Koperasi</a></li>
                <li><a href="/services">Layanan</a></li>
                <li><a href="/membership">Keanggotaan</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="/contact">Hubungi Kami</a></li>
                <li><a href="#">Syarat dan Ketentuan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <?php if(!(session()->get('isLoggedIn'))) : ?>
                <a href="/signup" class="btn" >Daftar</a>
            <?php endif; ?>
            <div class="footer-text" style="padding-top: 2rem">
                <p>© 2021. All Rights Reserved. <br>Koperasi Simpan Pinjam Cooperativ</p>
            </div>
        </div>
    </div>
</footer>