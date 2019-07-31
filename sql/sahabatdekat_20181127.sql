/*
 Navicat Premium Data Transfer

 Source Server         : MySQL Local
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : sahabatdekat

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 27/11/2018 14:03:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dokumentasi
-- ----------------------------
DROP TABLE IF EXISTS `dokumentasi`;
CREATE TABLE `dokumentasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `judul_dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal_upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi_dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lokasi_hardcopy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ukuran_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dokumentasi
-- ----------------------------
INSERT INTO `dokumentasi` VALUES (1, '028/PKS/MTM/V/2018', 'Perjanjian Kerjasama Pengembangan Aplikasi Dashboard Investor Reksadana', 'Perjanjian_Kerjasama_Aplikasi_Dashboard.pdf', '2018-07-10', NULL, 'act', 'Dokumen perjanjian aplikasi dashboard', 'AJI', '3621.69', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (3, 'S-025/MTM-BIS/III/18', 'Software Requirement Spesification Dashboard Investor Reksa Dana', 'SRS_Aplikasi_Dashboard.pdf', '2018-07-12', NULL, 'act', '', 'AJI', '844.74', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (4, '001/ACT/DOK/I/18', 'DOKUMEN TRAINING PNM GROUP - ORACLE, FIXED ASSET', '', '2018-07-13', NULL, 'act', 'Dokumentasi aplikasi Oracle Holding PNM', 'Lemari nomor 3 dari AJI', '', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (5, '002/ACT/DOK/I/18', 'DOKUMEN TRAINING ONM-CM ORACLE, ORACLE EBS IMPLEMENTATION', '', '2018-07-13', NULL, 'act', 'Dokumentasi Aplikasi Oracle Holding PNM', 'Rak nomor 3 dari AJI', '', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (6, '1115/E-LNK/XI/2017', 'Subscription Akses Host to Host Dukcapil', 'Subscription_Akses_Host_to_Host_Dukcapil.pdf', '2018-07-17', NULL, 'act', 'Dokumen berlangganan akses host to host dukcapil', '', '1070.26', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (7, '719/E-LNK/VIII/2017', 'Subscription VPN S-Invest', 'Subscription_VPN_S-Invest.pdf', '2018-07-17', NULL, 'act', 'Form Berlangganan VPN S-Invest', '', '1045.36', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (8, '720/E-LNK/VIII/2017', 'Subscription KSEI-NET', 'Subscription_KSEI-NET.pdf', '2018-07-17', NULL, 'act', 'Form Berlangganan Jaringan KSEI-NET', '', '979.49', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (9, 'KSEI-3548/DIR/0318', 'Permohonan Pembukaan Akses ke ORCHiD', 'Permohonan_Pembukaan_Akses_ke_ORCHiD.pdf', '2018-07-17', NULL, 'act', 'Dokumen konfirmasi untuk pembukaan akses ke aplikasi ORCHiD milik KSEI', '', '443.59', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (10, '021/DCS-LNK/IX/2017', 'Berita Acara Test IP Dukcapil', 'Berita_Acara_Test_IP_Dukcapil.pdf', '2018-07-17', NULL, 'act', 'Dokumen berita acara test IP Dukcapil melalui jaringan KSEI-NET', '', '531.47', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (12, '003/ACT/DOK/I/18', 'User Manual S-Invest Internal PNM IM V.2 (Unit Registry)', 'Dokumentasi_S-INVEST_(Unit_Registry)_-_V2.pdf', '2018-07-26', NULL, 'act', 'User Manual yang sudah dirangkum untuk keperluan internal PT PNM IM', 'Clear Holder 001', '4250.43', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (13, 'MP-001/PNMIM-ACT/VII/18', 'Permintaan Pembukaan Akses Port Alamat IP Untuk Server DRC PNMIM', 'MEMO_PembukaanAlamatPortIP-DRC-PNMIM.pdf', '2018-08-13', NULL, 'act', '', 'Lemari IT No. 4', '549.97', NULL, NULL, NULL);
INSERT INTO `dokumentasi` VALUES (14, '004/ACT/DOK/I/18', 'License VMWare DRC', 'License-VMWare-DRC.pdf', '2018-08-15', NULL, 'act', '', '', '995.99', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for helpdesk
-- ----------------------------
DROP TABLE IF EXISTS `helpdesk`;
CREATE TABLE `helpdesk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelapor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `divisi_pelapor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal_pelaporan` date NULL DEFAULT NULL,
  `permasalahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `identifikasi_permasalahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `analisa_dampak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `skala_prioritas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rencana_penyelesaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal_penyelesaian` date NULL DEFAULT NULL,
  `penyelesaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `penyelesaian_oleh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 79 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of helpdesk
-- ----------------------------
INSERT INTO `helpdesk` VALUES (1, 'AYU', 'mkt', '2018-04-20', 'Tanggal logbook tidak sesuai', '2', '1', '1', '1', '2018-04-20', 'Menyesuaikan tanggal pada logbook transaksi', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (2, 'RDH', 'crm', '2018-04-19', 'Tabel pada word tidak bisa diketik', '2', '1', '1', '1', '2018-04-19', 'Membuat tabel baru', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (3, 'BKP', 'inv', '2018-04-16', 'Komputer pelan saat digunakan', '2', '1', '1', '1', '2018-04-16', 'Mengganti komputer lama dengan yang baru', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (4, 'BDH', 'inv', '2018-04-20', 'Bank yang baru difadtarkan tidak muncul', '2', '1', '1', '1', '2018-04-20', 'Menambahkan baris pada Data Validation', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (5, 'BDH', 'inv', '2018-04-20', 'Ingin menambahkan link file pada sheet excel', '2', '1', '1', '1', '2018-04-20', 'Menambahkan link file menggunakan hiperlink', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (6, 'AFS', 'mkt', '2018-04-23', 'Ingin mengumpulkan banyak file menjadi zip', '2', '1', '1', '1', '2018-04-23', 'Di compress ke format zip', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (7, 'BKP', 'inv', '2018-04-23', 'Tampilan tombol-tombol pada Excel hilang', '2', '1', '1', '1', '2018-04-23', 'Restart aplikasi Excel yang terbuka', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (8, 'FFF', 'mkt', '2018-05-02', 'Aplikasi Salaes Visit tidak dapat diakses', '5', '1', '2', '1', '2018-05-02', 'menyalakan web service di server', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (9, 'DMS', 'crm', '2018-05-02', 'Windows tidak teraktivasi', '2', '1', '1', '1', '2018-05-02', 'Melakukan aktivasi windows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (10, 'AYU', 'mkt', '2018-05-08', 'Halaman Redemption tidak bisa dibuka', '2', '1', '1', '1', '2018-05-08', 'Diupdate dari sisi programnya', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (11, 'ADR', 'opr', '2018-05-08', 'S-Invest tidak bisa digunakan', '3', '3', '2', '2', '2018-05-08', 'Menggunakan koneksi VPN KSEI', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (12, 'SYD', 'opr', '2018-05-08', 'Tidak terlihat penggaris/rules pada word', '2', '1', '1', '1', '2018-05-08', 'Dimunculkan penggaris/rules pada word', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (13, 'UMH', 'inv', '2018-05-24', 'Koneksi jaringan mati', '1', '1', '1', '1', '2018-05-24', 'Kabel LAN dibenahi', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (14, 'MZA', 'inv', '2018-05-24', 'Tidak ada server scan umum', '2', '1', '1', '1', '2018-05-24', 'Mapping drive scan umum', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (15, 'GUN', 'act', '2018-05-24', 'Pada file excel terdapat form yang tidak seharusnya ada', '2', '1', '1', '1', '2018-05-24', 'Form dapat dihapus pada menu Developer di excel', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (16, 'IRA', 'mkt', '2018-05-24', 'Tidak dapat membuka file pdf', '2', '1', '1', '1', '2018-05-24', 'Mengganti open with dari browser ke adobe reader', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (17, 'ERS', 'opr', '2018-05-31', 'Tidak ada email bulan januari sampai maret 2017', '4', '1', '1', '1', '2018-05-31', 'Mapping file .pst', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (18, 'IRA', 'mkt', '2018-06-04', 'Tidak ada Scan Umum', '2', '1', '1', '1', '2018-06-04', 'Mapping Scan Umum ke komputer IRA', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (19, 'AYU', 'mkt', '2018-06-05', 'Tidak ada drive marketing', '2', '1', '1', '1', '2018-06-05', 'Mapping drive marketing ke komputer IRA', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (20, 'TJL', 'mkt', '2018-06-06', 'Tidak ada Scan Umum', '2', '1', '1', '1', '2018-06-06', 'Mapping Scan Umum ke komputer TJL', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (21, 'AMP', 'opr', '2018-06-07', 'S-Invest tidak dapat login', '2', '1', '1', '1', '2018-06-07', 'Melakukan Clean Up S-Invest terlebih dahulu, sebelum menggunakan aplikasi S-Invest', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (22, 'RTW', 'opr', '2018-06-20', 'Komputer tidak dapat koneksi internet', '2', '1', '1', '1', '2018-06-20', 'Mengganti mode normal windows dari safe mode windows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (23, 'APS', 'inv', '2018-06-20', 'Tidak dapat mengakses folder Research Investment', '2', '1', '1', '1', '2018-06-20', 'DIberikan akses ke folder Research Investment', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (24, 'RIF', 'inv', '2018-06-20', 'Error saat melakukan upload data ke S-Invest', '2', '1', '1', '1', '2018-06-20', 'Melakukan revisi format upload yang sesuai dengan S-Invest', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (25, 'RTW', 'opr', '2018-06-21', 'Komputer tidak dapat koneksi internet', '2', '1', '1', '1', '2018-06-21', 'Mengganti mode normal windows dari safe mode windows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (26, 'AMP', 'opr', '2018-06-22', 'Tidak dapat masuk ke windows', '2', '1', '1', '1', '2018-06-22', 'Install ulang windows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (27, 'NEP', 'corsec', '2018-06-25', 'Muncul pemberitahuan Expired Windows', '2', '1', '1', '1', '2018-06-25', 'Melakukan aktivasi WIndows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (28, 'EGA', 'mkt', '2018-06-26', 'Tidak ada drive marketing', '2', '1', '1', '1', '2018-06-26', 'Mapping drive marketing di laptop marketing', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (29, 'ROM', 'act', '2018-06-28', 'Excel tidak dapat melakukan perhitungan otomatis', '2', '1', '1', '1', '2018-06-28', 'Melakukan restart terhadap aplikasi Excel', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (30, 'FFF', 'mkt', '2018-07-10', 'Cetak pas foto', '2', '1', '1', '1', '2018-07-10', 'Mengatur ukuran foto dan mencetak foto', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (31, 'RIF', 'inv', '2018-07-10', 'Ingin menambahkan produk baru pada template Equity', '2', '1', '1', '1', '2018-07-10', 'Mapping produk baru pada template Equity', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (32, 'RLS', 'inv', '2018-07-10', 'Email mengalami putus jaringan', '2', '1', '1', '1', '2018-07-10', 'Mematikan mode Working Offline', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (33, 'ANY', 'skr', '2018-07-12', 'Email tidak bisa digunakan', '2', '2', '1', '1', '2018-07-12', 'Me-non-aktifkan mode Working Offline', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (34, 'BDS', 'dir', '2018-07-12', 'Komputer lemot', '2', '1', '1', '1', '2018-07-12', 'Mematikan service antivirus dan menghapus notifikasi', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (35, 'GUN', 'act', '2018-07-17', 'ASD dan SLJ tidak menerima email di DG_BOD', '4', '1', '1', '1', '2018-07-17', 'Memasukkan ASD dan SLJ ke DG_BOD dan mengeluarkan FNA dari DG_BOD', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (36, 'RDH', 'crm', '2018-07-17', 'Komputer tidak menyala karena mode sleep', '2', '1', '1', '1', '2018-07-17', 'Merestart komputer', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (37, 'MDM', 'opr', '2018-07-17', 'Monitor Laptop mati total', '1', '1', '1', '1', '2018-07-17', 'Mengganti sementara laptop MDM dengan Laptop IT', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (38, 'RTW', 'opr', '2018-07-24', 'Ingin memindahkan isi email di outlook ke gmail', '4', '1', '1', '1', '2018-07-24', 'Copy Paste isi email outlook ke gmail', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (39, 'SLJ', 'inv', '2018-07-19', 'Kabel LAN sudah usang', '1', '1', '1', '1', '2018-07-19', 'Kabel LAN diganti dengan yang baru', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (40, 'MDM', 'opr', '2018-07-23', 'Aplikasi APOLO OJK tidak dapat digunakan', '2', '1', '1', '1', '2018-07-23', 'Install ulang Aplikasi APOLO OJK', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (41, 'AMP', 'opr', '2018-07-25', 'Corel Draw meminta aktivasi', '2', '1', '1', '1', '2018-07-25', 'Melakukan aktivasi Corel Draw', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (42, 'AMP', 'opr', '2018-07-26', 'Email Penuh', '4', '1', '1', '1', '2018-07-26', 'Email di pindahkan ke personal folder', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (43, 'MDM', 'opr', '2018-07-26', 'Tidak bisa print ke Printer RAA', '1', '1', '1', '1', '2018-07-26', 'Instal driver Printer RAA di laptop MDM', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (44, 'AMS', 'mkt', '2018-07-26', 'Koneksi email terputus', '4', '1', '1', '1', '2018-07-26', 'Melakukan login outlook dengan akun AMS', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (45, 'MDM', 'opr', '2018-07-25', 'Ingin ganti keyboard', '1', '1', '1', '1', '2018-07-25', 'Mengganti keyboard dengan yang baru', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (46, 'RTW', 'opr', '2018-07-27', 'Tidak bisa memasukkan gambar ke PDF', '2', '1', '1', '1', '2018-07-27', 'Insert Image dari Abode Acrobat Reader', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (47, 'DMS', 'crm', '2018-08-03', 'Tidak bisa mengirimkan email', '4', '1', '1', '1', '2018-08-03', 'Menambahkan tanda baca titik koma di akhir alamat email yang dituju', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (48, 'AMP', 'opr', '2018-08-06', 'Email tidak ada yang masuk', '4', '1', '1', '1', '2018-08-06', 'Melakukan update folder email dan matikan mode working offline', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (49, 'AMS', 'mkt', '2018-08-08', 'Tidak bisa membalas email', '4', '1', '1', '1', '2018-08-08', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (50, 'RIF', 'inv', '2018-08-09', 'Tidak bisa membalas email', '4', '1', '1', '1', '2018-08-09', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (51, 'TJL', 'mkt', '2018-08-08', 'Tidak bisa membalas email', '4', '1', '1', '1', '2018-08-08', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (52, 'EGA', 'mkt', '2018-08-08', 'Tidak bisa membalas email', '4', '1', '1', '1', '2018-08-08', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (53, 'ADR', 'opr', '2018-08-10', 'Tidak bisa buka Explorer/Folder', '2', '1', '1', '1', '2018-08-10', 'Restart Explorer', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (54, 'AFS', 'mkt', '2018-08-10', 'Minta tolong dimunculkan semua data visit pada saat dilakukan generate data', '2', '1', '1', '1', '2018-08-10', 'Memunculkan sesuai request dari user', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (55, 'FFF', 'mkt', '2018-08-10', 'Minta tolong untuk ditambahkan menu generate data visit pada aplikasi sales visit', '2', '1', '1', '1', '2018-08-10', 'Memenuhi Request user', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (56, 'MDM', 'opr', '2018-08-10', 'Ingin menambahkan SYD di Group Email Komite Produk', '4', '1', '1', '1', '2018-08-10', 'Menambahkan SYD ke Group Email Komite Produk', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (57, 'LSY', 'opr', '2018-08-13', 'Tidak bisa upload data APOLO OJK', '2', '1', '1', '1', '2018-08-13', 'Menginstal aplikasi enkripsi APOLO OJK', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (58, 'FFF', 'mkt', '2018-08-13', 'Tidak bisa menggunakan Word', '2', '1', '1', '1', '2018-08-13', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (59, 'ANY', 'skr', '2018-08-13', 'Komputer tidak bisa di operasikan (hang)', '1', '1', '1', '1', '2018-08-13', 'Dilakukan restart Komputer', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (60, 'MDM', 'pro', '2018-08-14', 'Tidak bisa melakukan print dokumen', '2', '1', '1', '1', '2018-08-14', 'Install dan konfigurasi printer menggunakan CD Driver', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (61, 'SYD', 'crm', '2018-08-14', 'Monitor Mati', '1', '1', '1', '1', '2018-08-14', 'Kabel monitor kurang kencang', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (62, 'FFF', 'mkt', '2018-08-15', 'Komputer tidak bisa masuk ke halaman utama windows', '2', '1', '1', '1', '2018-08-15', 'Install Ulang', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (63, 'RTW', 'opr', '2018-08-16', 'Tidak bisa menampilkan data pada file excel', '2', '1', '1', '1', '2018-08-16', 'Copy Paste ke file excel yang baru', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (64, 'ANY', 'skr', '2018-08-20', 'Jaringan tidak terhubung', '3', '1', '1', '1', '2018-08-20', 'mengencangkan kabel LAN', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (65, 'SYD', 'crm', '2018-08-20', 'Ingin mengakses folder CRM', '2', '1', '1', '1', '2018-08-20', 'Mengoneksikan laptop ke jaringan internal', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (66, 'LSY', 'opr', '2018-08-20', 'Tidak bisa mengupload APOLO', '2', '1', '1', '1', '2018-08-20', 'Mengganti tanggal menjadi hari jumat, meski hari jumat libur tetap dihitung, jadi tanggal pelaporan tetap di hari jumat', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (67, 'MDM', 'opr', '2018-08-20', 'Tidak bisa mengirim file email karena terlalu besar', '4', '1', '1', '1', '2018-08-20', 'Menggunakan Google Drive', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (68, 'VIN', 'mkt', '2018-08-23', 'Tidak ada nama nasabah di aplikasi sales visit', '2', '1', '1', '1', '2018-08-23', 'Menambahkan kode sales VIN pada aplikasi sales visit', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (69, 'ROM', 'opr', '2018-09-05', 'Tidak bisa membuka file excel', '2', '1', '1', '1', '2018-09-05', 'Pada file excel, Properties, checklist unblock', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (70, 'ANY', 'skr', '2018-09-04', 'OS error loading', '2', '1', '1', '1', '2018-09-04', 'Restart PC', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (71, 'DMS', 'crm', '2018-09-05', 'Ingin konek ke server', '1', '1', '1', '1', '2018-09-05', 'Konek ke wifi internal', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (72, 'ANY', 'skr', '2018-09-06', 'Tidak bisa menghubungkan HDD External ke PC', '1', '1', '1', '1', '2018-09-06', 'Restart PC', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (73, 'SYD', 'crm', '2018-09-06', 'Tidak bisa menghubungkan HDD External ke PC', '1', '1', '1', '1', '2018-09-06', 'Restart PC', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (74, 'ROM', 'opr', '2018-09-06', 'PC tidak bisa masuk ke desktop', '2', '1', '1', '1', '2018-09-06', 'Install ulang windows', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (75, 'LSY', 'opr', '2018-09-06', 'Print Excel error', '2', '1', '1', '1', '2018-09-06', 'Convert excel ke pdf', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (76, 'RSW', 'pro', '2018-09-12', 'Word Failed Activation', '2', '1', '1', '1', '2018-09-12', 'Aktivasi Office', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (77, 'SCR', 'pro', '2018-09-12', 'Microsoft Project belum diaktivasi', '2', '1', '1', '1', '2018-09-12', 'Melakukan Aktivasi pada Microsoft Project', NULL, NULL, NULL, NULL);
INSERT INTO `helpdesk` VALUES (78, 'ADR', 'opr', '2018-09-12', 'Tidak bisa mengakses aplikasi logbook', '2', '1', '1', '1', '2018-09-12', 'Mengirimkan link aplikasi logbook melalui email', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for lembur
-- ----------------------------
DROP TABLE IF EXISTS `lembur`;
CREATE TABLE `lembur`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_lembur` date NULL DEFAULT NULL,
  `tugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  `deleted_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lembur
-- ----------------------------
INSERT INTO `lembur` VALUES (1, '2018-04-17', 'Analisa Exchange of Information Pajak', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (2, '2018-04-18', 'Analisa Exchange of Information Pajak', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (3, '2018-04-19', 'Design aplikasi penjadwalan', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (4, '2018-04-20', 'Mempelajari ORCHiD', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (5, '2018-04-23', 'Mapping data S21 ke template S-Invest', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (6, '2018-04-27', 'Mengerjakan Upload data Pajak setiap Fund', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (7, '2018-04-28', 'Mengerjakan Upload data Pajak setiap Fund dan jaga tukang', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (8, '2018-04-29', 'Mengerjakan Upload data Pajak setiap Fund dan jaga tukang', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (9, '2018-05-07', 'Mapping data S21 ke template S-Invest', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (10, '2018-06-28', 'Membuat file CSV eSPT PPh Badan Rupiah', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (11, '2018-08-10', 'Melakukan analisa penyamaan template database untuk aplikasi dashboard', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (12, '2018-08-11', 'Melakukan analisa penyamaan template database untuk aplikasi dashboard dan merapikan dokumen', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (13, '2018-08-13', 'Mengerjakan Macro Excel', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (14, '2018-07-27', 'Mengerjakan peta proses divisi', NULL, NULL, NULL);
INSERT INTO `lembur` VALUES (15, '2018-07-30', 'membuat daftar catatan untuk audit', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for ref_helpdesk_dampak
-- ----------------------------
DROP TABLE IF EXISTS `ref_helpdesk_dampak`;
CREATE TABLE `ref_helpdesk_dampak`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_helpdesk_dampak
-- ----------------------------
INSERT INTO `ref_helpdesk_dampak` VALUES (1, 'Minor');
INSERT INTO `ref_helpdesk_dampak` VALUES (2, 'Mayor');
INSERT INTO `ref_helpdesk_dampak` VALUES (3, 'Improvment');

-- ----------------------------
-- Table structure for ref_helpdesk_divisi
-- ----------------------------
DROP TABLE IF EXISTS `ref_helpdesk_divisi`;
CREATE TABLE `ref_helpdesk_divisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_helpdesk_divisi
-- ----------------------------
INSERT INTO `ref_helpdesk_divisi` VALUES (1, 'dir', 'Direksi');
INSERT INTO `ref_helpdesk_divisi` VALUES (2, 'skr', 'Sekertaris');
INSERT INTO `ref_helpdesk_divisi` VALUES (3, 'corsec', 'Corsec');
INSERT INTO `ref_helpdesk_divisi` VALUES (4, 'inv', 'Investment');
INSERT INTO `ref_helpdesk_divisi` VALUES (5, 'dlg', 'Dealing');
INSERT INTO `ref_helpdesk_divisi` VALUES (6, 'mkt', 'Marketing');
INSERT INTO `ref_helpdesk_divisi` VALUES (7, 'crm', 'CRM');
INSERT INTO `ref_helpdesk_divisi` VALUES (8, 'opr', 'Operations');
INSERT INTO `ref_helpdesk_divisi` VALUES (9, 'act', 'Accounting, Tax & IT');
INSERT INTO `ref_helpdesk_divisi` VALUES (10, 'pro', 'Products');
INSERT INTO `ref_helpdesk_divisi` VALUES (11, 'upis', 'UPIS');

-- ----------------------------
-- Table structure for ref_helpdesk_identifikasi
-- ----------------------------
DROP TABLE IF EXISTS `ref_helpdesk_identifikasi`;
CREATE TABLE `ref_helpdesk_identifikasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_helpdesk_identifikasi
-- ----------------------------
INSERT INTO `ref_helpdesk_identifikasi` VALUES (1, 'Hardware');
INSERT INTO `ref_helpdesk_identifikasi` VALUES (2, 'Software');
INSERT INTO `ref_helpdesk_identifikasi` VALUES (3, 'Internet');
INSERT INTO `ref_helpdesk_identifikasi` VALUES (4, 'Email');
INSERT INTO `ref_helpdesk_identifikasi` VALUES (5, 'Server');

-- ----------------------------
-- Table structure for ref_helpdesk_prioritas
-- ----------------------------
DROP TABLE IF EXISTS `ref_helpdesk_prioritas`;
CREATE TABLE `ref_helpdesk_prioritas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_helpdesk_prioritas
-- ----------------------------
INSERT INTO `ref_helpdesk_prioritas` VALUES (1, 'Biasa');
INSERT INTO `ref_helpdesk_prioritas` VALUES (2, 'Mendesak');

-- ----------------------------
-- Table structure for ref_helpdesk_rencana_penyelesaian
-- ----------------------------
DROP TABLE IF EXISTS `ref_helpdesk_rencana_penyelesaian`;
CREATE TABLE `ref_helpdesk_rencana_penyelesaian`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_helpdesk_rencana_penyelesaian
-- ----------------------------
INSERT INTO `ref_helpdesk_rencana_penyelesaian` VALUES (1, 'Internal');
INSERT INTO `ref_helpdesk_rencana_penyelesaian` VALUES (2, 'Eksternal');

SET FOREIGN_KEY_CHECKS = 1;
