<?php
$pendaftaran_berhasil = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pendaftaran_berhasil = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar Nasional - UHW Perbanas</title>
</head>
<body>

    <header>
        <h1>Seminar Nasional Innovation & Digital Transformation 2026</h1>
        <p>Sistem Informasi - Universitas Hayam Wuruk Perbanas</p>
    </header>

    <nav>
        <a href="#deskripsi">Deskripsi</a>
        <a href="#jadwal">Jadwal Acara</a>
        <a href="#pendaftaran">Formulir Pendaftaran</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <main>
        
        <section id="deskripsi">
            <h2>Informasi Seminar</h2>
            
            <article>
                <h3>Tentang Seminar</h3>
                <p>Seminar nasional ini membahas tren teknologi masa depan, kecerdasan buatan (AI), serta peran transformasi digital dalam dunia industri modern. Dihadiri oleh para praktisi, akademisi terkemuka dan Mahasiswa.</p>
            </article>

            <figure>
                <img src="auditorium.jpg" alt="Suasana Seminar UHW Perbanas" width="800">
                <figcaption>Auditorium Utama Universitas Hayam Wuruk Perbanas</figcaption>
            </figure>
        </section>

        <section id="jadwal">
            <h2>RUNDOWN ACARA</h2>
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th style="width: 50px; text-align: center;">No.</th>
                        <th style="width: 130px; text-align: center;">Waktu</th>
                        <th style="text-align: center;">Agenda</th>
                        <th style="text-align: center;">Narasumber / Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>07.30 - 08.15</td>
                        <td>Registrasi Peserta</td>
                        <td>Panitia Registrasi</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>08.15 - 08.30</td>
                        <td>Pembukaan, Menyanyikan Lagu Indonesia Raya & Hymne UHW Perbanas</td>
                        <td>MC & Seluruh Peserta</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>08.30 - 08.45</td>
                        <td>Sambutan Rektor UHW Perbanas</td>
                        <td>Rektor</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">4</td>
                        <td>08.45 - 10.00</td>
                        <td><strong>Materi Pertama:</strong> Masa Depan AI & Transformasi Digital di Indonesia</td>
                        <td>Prof. Alzo Ardianza, S.Kom., M.Kom.</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">5</td>
                        <td>10.00 - 10.15</td>
                        <td>Sesi Tanya Jawab</td>
                        <td>Moderator & Peserta</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">6</td>
                        <td>10.15 - 10.30</td>
                        <td>Coffee Break & Networking Session</td>
                        <td>Seluruh Peserta</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">7</td>
                        <td>10.30 - 11.45</td>
                        <td><strong>Materi Kedua:</strong> Kesiapan SDM & Skill Web Dev dalam Industri Modern</td>
                        <td>Tim Pakar & Praktisi Teknologi</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">8</td>
                        <td>11.45 - 12.00</td>
                        <td>Sesi Tanya Jawab</td>
                        <td>Moderator & Peserta</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">9</td>
                        <td>12.00 - 12.20</td>
                        <td>Kuis Interaktif & Sesi Foto Bersama</td>
                        <td>MC & Panitia</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">10</td>
                        <td>12.20 - 12.30</td>
                        <td>Penutupan & Informasi Pembagian Hadiah Kuis</td>
                        <td>MC</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">11</td>
                        <td>12.30 - 13.00</td>
                        <td>Pengambilan Konsumsi & Ishoma</td>
                        <td>Seluruh Peserta & Panitia</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total Durasi Kegiatan Seminar</td>
                        <td>5 Jam 30 Menit</td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <aside>
            <h2>Pengumuman Penting</h2>
            <p>Batas akhir pendaftaran seminar adalah tanggal 30 September 2026. Seluruh peserta yang hadir penuh akan mendapatkan sertifikat digital (e-certificate).</p>
        </aside>

        <section id="pendaftaran">
            <h2>Formulir Pendaftaran Seminar</h2>
            <form action="" method="post">
                
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                </div>

                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon / WA:</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="08xxxxxxxxxx" required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi:</label>
                    <select id="prodi" name="prodi" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="si">Sistem Informasi</option>
                        <option value="ti">Teknik Informatika</option>
                        <option value="dkv">Desain Komunikasi Visual</option>
                        <option value="ak">Akuntansi</option>
                        <option value="mn">Manajemen</option>
                        <option value="es">Ekonomi Syariah</option>
                        <option value="d3pb">D3 Perbankan</option>
                    </select>
                </div>

                <fieldset>
                    <legend>Jenis Kelamin</legend>
                    <div class="radio-group">
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="L" required>
                        <label for="laki-laki">Laki-laki</label>
                        
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Pilihan Sesi Seminar yang Diikuti</legend>
                    <div class="checkbox-group">
                        <div style="margin-bottom: 8px;">
                            <input type="checkbox" id="sesi1" name="sesi[]" value="Sesi Keynote: Masa Depan AI">
                            <label for="sesi1">Masa Depan AI & Transformasi Digital di Indonesia</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sesi2" name="sesi[]" value="Sesi Panel: Transformasi Digital">
                            <label for="sesi2">Kesiapan SDM & Skill Web Dev dalam Industri Modern</label>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="alasan">Alasan Mengikuti Seminar:</label>
                    <textarea id="alasan" name="alasan" rows="4" placeholder="Tuliskan motivasi atau alasan Anda mengikuti seminar ini..." required></textarea>
                </div>

                <div class="checkbox-group" style="margin-bottom: 1rem;">
                    <input type="checkbox" id="persetujuan" name="persetujuan" value="setuju" required>
                    <label for="persetujuan">Saya menyetujui seluruh ketentuan kegiatan seminar yang berlaku.</label>
                </div>

                <div class="btn-container">
                    <button type="submit">Daftar Seminar</button>
                    <button type="reset">Reset</button>
                </div>
            </form>

            <?php if ($pendaftaran_berhasil): ?>
                <div id="pesan-sukses" style="margin-top: 1.5rem; padding: 1rem; border-radius: 8px; font-weight: 500;">
                    🎉 <strong>Pendaftaran Berhasil!</strong> Terima kasih telah mendaftar. Bukti pendaftaran dan e-ticket telah dikirimkan ke email Anda.
                </div>
            <?php endif; ?>

        </section>
    </main>

    <footer id="kontak">
        <p>&copy; 2026 Program Studi Sistem Informasi - UHW Perbanas</p>
        <p style="margin-top: 0.5rem;">
            Informasi lebih lanjut: 
            <a href="mailto:202502021014@hayamwuruk.ac.id">Email Panitia</a> | 
            <a href="https://www.perbanas.ac.id" target="_blank" rel="noopener noreferrer">Kunjungi Website UHW Perbanas</a>
        </p>
    </footer>

</body>
</html>