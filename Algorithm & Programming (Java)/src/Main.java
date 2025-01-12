import java.util.Scanner;
import java.util.Stack;

public class Main {
    static Scanner sc = new Scanner(System.in);
    static Admin admin = new Admin("admin", "12345");
    static Mobil[] daftarMobil = new Mobil[100];
    static Sales[] daftarSales = new Sales[100];
    static int jumlahMobil = 0;
    static int jumlahSales = 0;
    static boolean login = false;
    static int pin = 999;
    static Transaksi transaksiQueue = new Transaksi();
    static int transaksiCounter = 1;
    static int mobilCounter = 7;
    static Stack<Mobil[]> undoStackMobil = new Stack<>();
    static Stack<Mobil[]> redoStackMobil = new Stack<>();
    static Stack<Sales[]> undoStackSales = new Stack<>();
    static Stack<Sales[]> redoStackSales = new Stack<>();
    static String lastAction = "";

    public static void main(String[] args) {
        // Daftar Mobil
        daftarMobil[jumlahMobil++] = new Mobil("C001", "Toyota", "Corolla", 1800, 2019, "Sedan", 300000000, 320000000);
        daftarMobil[jumlahMobil++] = new Mobil("C002", "Honda", "Civic", 2000, 2020, "Sedan-Sport", 350000000, 370000000);
        daftarMobil[jumlahMobil++] = new Mobil("C003", "Toyota", "Fortuner", 2400, 2018, "SUV", 450000000, 470000000);
        daftarMobil[jumlahMobil++] = new Mobil("C004", "Mitsubishi", "Pajero Sport", 2500, 2017, "SUV", 500000000, 520000000);
        daftarMobil[jumlahMobil++] = new Mobil("C005", "Daihatsu", "Xenia", 1500, 2019, "MPV", 190000000, 210000000);
        daftarMobil[jumlahMobil++] = new Mobil("C006", "Toyota", "Avanza", 1500, 2020, "MPV", 200000000, 220000000);

        // Daftar Sales
        daftarSales[jumlahSales++] = new Sales("S01", "Kenny");
        daftarSales[jumlahSales++] = new Sales("S02", "Valen");
        daftarSales[jumlahSales++] = new Sales("S03", "Evan");
        daftarSales[jumlahSales++] = new Sales("S04", "Batara");

        System.out.println("~ Selamat Datang di UMN Car Showroom Management System! ~\n");
        
        // Menu Utama
        int pilihanMenu;
        if (login()) {
            while (true) { 
                System.out.println("\n===== UMN Car Showroom =====");
                System.out.println("1. Manajemen Mobil");
                System.out.println("2. Manajemen Transaksi");
                System.out.println("3. Manajemen Sales");
                System.out.println("4. Undo Aktivitas Terakhir");
                System.out.println("5. Redo Aktivitas Terakhir");
                System.out.println("0. Keluar");
                System.out.print("Pilih menu: ");
                pilihanMenu = sc.nextInt();
    
                switch (pilihanMenu) {
                    case 1: // Manajemen Mobil
                        manajemenMobil();
                        break;
                    case 2:
                        manajemenTransaksi();
                        break;
                    case 3:
                        manajemenSales();
                        break;
                    case 4:
                        undo();
                        break;
                    case 5:
                        redo();
                        break;
                    case 0:
                        System.out.println("Terima kasih!");
                        System.exit(0);
                        break;
                    default:
                        System.out.println("Pilihan tidak valid.");
                }
            }
        } else {
            System.out.println("Login gagal atau keluar. Program berhenti.");
        }       
    }


    public static void manajemenMobil() {
        int pilihanAktivitas;
        do {
            System.out.println("\n\t=== Manajemen Mobil ===\t");
            System.out.println("1. Daftar Mobil");
            System.out.println("2. Tambah Mobil");
            System.out.println("3. Edit Info Mobil");
            System.out.println("4. Hapus Mobil");
            System.out.println("5. Cari Mobil");
            System.out.println("6. Urutkan Mobil");
            System.out.println("0. Kembali ke Menu Utama");
            System.out.print("Pilih aktivitas: ");
            pilihanAktivitas = sc.nextInt();
    
            switch (pilihanAktivitas) {
                case 1:
                bubbleSortID();    
                lihatMobil();
                    break;
                case 2:
                    tambahMobil();
                    break;
                case 3:
                    editMobil();
                    break;
                case 4:
                    hapusMobil();
                    break;
                case 5:
                    aktivitasCariMobil();
                    break;
                case 6:
                    urutkanMobil();
                    break;
                case 0:
                    System.out.println("Kembali ke Menu Utama.");
                    return;
                default:
                    System.out.println("Pilihan tidak valid.");
                    break;
            }
        } while (pilihanAktivitas != 0);
    }

    public static boolean login() {
        while (true) {
            System.out.println("Mohon masukkan PIN Admin! (*Masukkan 444 untuk keluar)");
            System.out.print("Masukkan username: ");
            String username = sc.next();
            if (username.equals("444")) {
                return false;
            }
            System.out.print("Masukkan PIN (5 angka): ");
            String pin = sc.next();
            if (pin.equals("444")) {
                return false;
            }

            if (username.equals(admin.getUsername()) && pin.equals(admin.getPin())) {
                System.out.println("Login berhasil.");
                return true;
            } else {
                System.out.println("Username atau PIN salah.");
                System.out.print("Apakah Anda ingin mencoba lagi? (y/n): ");
                String cobaLagi = sc.next();
                if (cobaLagi.equalsIgnoreCase("n")) {
                    return false;
                }
            }
        }
    }

    // Fungsi Tambah Data Mobil
    public static void tambahMobil() {
        String id = "C" + String.format("%03d", mobilCounter++);
        sc.nextLine();
        System.out.print("Merk Mobil: ");
        String merk = sc.nextLine();
        System.out.print("Nama Mobil: ");
        String nama = sc.nextLine();
        System.out.print("Kapasitas Mesin Mobil: ");
        int kapasitas = sc.nextInt();
        System.out.print("Tahun Produksi Mobil: ");
        int tahun = sc.nextInt();
        sc.nextLine();
        System.out.print("Tipe Mobil: ");
        String tipe = sc.nextLine();
        System.out.print("Harga Cash Mobil: ");
        int hargaCash = sc.nextInt();
        System.out.print("Harga Kredit Mobil: ");
        int hargaKredit = sc.nextInt();

        // Simpan status sebelum perubahan ke undo stack
        undoStackMobil.push(daftarMobil.clone());
        redoStackMobil.clear();
        lastAction = "mobil";

        daftarMobil[jumlahMobil++] = new Mobil(id, merk, nama, kapasitas, tahun, tipe, hargaCash, hargaKredit);
        System.out.println("Data mobil berhasil ditambahkan!\n");
    }

    // Sorting ID (Bubble Sort) berdasarkan angka ID mobil
    public static void bubbleSortID() {
        for (int i = 0; i < jumlahMobil - 1; i++) {
            for (int j = 0; j < jumlahMobil - i - 1; j++) {
                int id1 = Integer.parseInt(daftarMobil[j].getId().substring(1));
                int id2 = Integer.parseInt(daftarMobil[j + 1].getId().substring(1));
                if (id1 > id2) {
                    Mobil temp = daftarMobil[j];
                    daftarMobil[j] = daftarMobil[j + 1];
                    daftarMobil[j + 1] = temp;
                }
            }
        }
    }

    // Fungsi Lihat Semua Mobil
    public static void lihatMobil() {
        if (jumlahMobil == 0) {
            System.out.println("Tidak ada data mobil.");
            return;
        }
        System.out.println("\nDaftar Mobil:");
        for (int i = 0; i < jumlahMobil; i++) {
            System.out.println("---" + daftarMobil[i]);
        }
    }

    public static void editMobil() {
        System.out.print("Masukkan ID Mobil yang ingin diubah: ");
        String id = sc.next();
        boolean found = false;
    
        for (int i = 0; i < jumlahMobil; i++) {
            if (daftarMobil[i].getId().equals(id)) {
                System.out.println("Data mobil yang ingin diubah:");
                System.out.println("ID: " + daftarMobil[i].getId());
                System.out.println("Merk: " + daftarMobil[i].getMerk());
                System.out.println("Nama: " + daftarMobil[i].getNama());
                System.out.println("Kapasitas Mesin: " + daftarMobil[i].getKapasitas());
                System.out.println("Tahun Produksi: " + daftarMobil[i].getTahun());
                System.out.println("Tipe: " + daftarMobil[i].getTipe());
                System.out.println("Harga Cash: " + daftarMobil[i].getHargaCash());
                System.out.println("Harga Kredit: " + daftarMobil[i].getHargaKredit());
    
                sc.nextLine();
    
                System.out.print("Merk baru (" + daftarMobil[i].getMerk() + "): ");
                String merk = sc.nextLine();
                if (!merk.isEmpty()) {
                    // Simpan status sebelum perubahan ke undo stack
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";
                    
                    daftarMobil[i].setMerk(merk);
                }
    
                System.out.print("Nama baru (" + daftarMobil[i].getNama() + "): ");
                String nama = sc.nextLine();
                if (!nama.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";

                    daftarMobil[i].setNama(nama);
                }
    
                System.out.print("Kapasitas Mesin baru (" + daftarMobil[i].getKapasitas() + "): ");
                String kapasitasMesinStr = sc.nextLine();
                if (!kapasitasMesinStr.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";

                    int kapasitasMesin = Integer.parseInt(kapasitasMesinStr);
                    daftarMobil[i].setKapasitas(kapasitasMesin);
                }
    
                System.out.print("Tahun Produksi baru (" + daftarMobil[i].getTahun() + "): ");
                String tahunProduksiStr = sc.nextLine();
                if (!tahunProduksiStr.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";
                    
                    int tahunProduksi = Integer.parseInt(tahunProduksiStr);
                    daftarMobil[i].setTahun(tahunProduksi);
                }
    
                System.out.print("Tipe Mobil baru (" + daftarMobil[i].getTipe() + "): ");
                String tipeMobil = sc.nextLine();
                if (!tipeMobil.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";
                    
                    daftarMobil[i].setTipe(tipeMobil);
                }
    
                System.out.print("Harga Cash baru (" + daftarMobil[i].getHargaCash() + "): ");
                String hargaCashStr = sc.nextLine();
                if (!hargaCashStr.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";
                    
                    int hargaCash = Integer.parseInt(hargaCashStr);
                    daftarMobil[i].setHargaCash(hargaCash);
                }
    
                System.out.print("Harga Kredit baru (" + daftarMobil[i].getHargaKredit() + "): ");
                String hargaKreditStr = sc.nextLine();
                if (!hargaKreditStr.isEmpty()) {
                    undoStackMobil.push(daftarMobil.clone());
                    redoStackMobil.clear();
                    lastAction = "mobil";
                    
                    int hargaKredit = Integer.parseInt(hargaKreditStr);
                    daftarMobil[i].setHargaKredit(hargaKredit);
                }
    
                System.out.println("Data mobil berhasil diubah.");
                found = true;
                break;
            }
        }
    
        if (!found) {
            System.out.println("Mobil dengan ID tersebut tidak ditemukan.");
        }
    }

    public static void hapusMobil() {
        System.out.print("Masukkan ID Mobil yang ingin dihapus: ");
        String id = sc.next();
        boolean found = false;
    
        for (int i = 0; i < jumlahMobil; i++) {
            if (daftarMobil[i].getId().equals(id)) {
                // Simpan status sebelum perubahan ke undo stack
                undoStackMobil.push(daftarMobil.clone());
                redoStackMobil.clear();
                lastAction = "mobil";
                
                // Menampilkan data mobil yang akan dihapus
                System.out.println("Data mobil yang akan dihapus:");
                System.out.println("ID: " + daftarMobil[i].getId());
                System.out.println("Merk: " + daftarMobil[i].getMerk());
                System.out.println("Nama: " + daftarMobil[i].getNama());
                System.out.println("Kapasitas Mesin: " + daftarMobil[i].getKapasitas());
                System.out.println("Tahun Produksi: " + daftarMobil[i].getTahun());
                System.out.println("Tipe: " + daftarMobil[i].getTipe());
                System.out.println("Harga Cash: " + daftarMobil[i].getHargaCash());
                System.out.println("Harga Kredit: " + daftarMobil[i].getHargaKredit());
    
                // Konfirmasi penghapusan
                System.out.print("Apakah Anda yakin ingin menghapus mobil ini? (y/n): ");
                String konfirmasi = sc.next();
    
                if (konfirmasi.equalsIgnoreCase("y")) {
                    for (int j = i; j < jumlahMobil - 1; j++) {
                        daftarMobil[j] = daftarMobil[j + 1];
                    }
                    jumlahMobil--;
                    System.out.println("Mobil dengan ID " + id + " berhasil dihapus.");
                } else {
                    System.out.println("Penghapusan mobil dibatalkan.");
                }
                found = true;
                break;
            }
        }
    
        if (!found) {
            System.out.println("Mobil dengan ID tersebut tidak ditemukan.");
        }
    }

    public static void urutkanMobil() {
        System.out.println("\n\t=== Urutkan Mobil ===\t");
        System.out.println("1. Urutkan Berdasarkan Harga (Terendah ke Tertinggi)");
        System.out.println("2. Urutkan Berdasarkan Harga (Tertinggi ke Terendah)");
        System.out.print("Pilih: ");
        int urutPilihan = sc.nextInt();
    
        if (urutPilihan == 1) {
            bubbleSortHarga(true);
            lihatMobil();
        } else if (urutPilihan == 2) {
            bubbleSortHarga(false);
            lihatMobil();
        } else {
            System.out.println("Pilihan tidak valid.");
        }
    }

    // Sorting Harga (Bubble Sort)
    public static void bubbleSortHarga(boolean ascending) {
        for (int i = 0; i < jumlahMobil - 1; i++) {
            for (int j = 0; j < jumlahMobil - i - 1; j++) {
                boolean condition = ascending
                        ? daftarMobil[j].getHargaCash() > daftarMobil[j + 1].getHargaCash()
                        : daftarMobil[j].getHargaCash() < daftarMobil[j + 1].getHargaCash();

                if (condition) {
                    Mobil temp = daftarMobil[j];
                    daftarMobil[j] = daftarMobil[j + 1];
                    daftarMobil[j + 1] = temp;
                }
            }
        }
    }

    public static void aktivitasCariMobil() {
        System.out.println("\n\t=== Cari Mobil ===\t");
            System.out.println("1. Cari Berdasarkan Nama");
            System.out.println("2. Cari Berdasarkan Harga");
            System.out.println("0. Kembali ke Menu Utama");
            System.out.print("Pilih fitur: ");
            int fitur = sc.nextInt();
    
            switch (fitur) {
                case 1:
                    cariMobilNama();
                    break;
                case 2:
                    cariMobilHarga();
                    break;
                case 0:
                    return;
                default:
                    System.out.println("Pilihan tidak valid.");
                    break;
            }
    }

    // Searching Berdasarkan Nama (Linear Search)
    public static void cariMobilNama() {
        sc.nextLine();
        System.out.print("Masukkan nama mobil yang dicari: ");
        String nama = sc.nextLine();
        boolean ditemukan = false;

        for (int i = 0; i < jumlahMobil; i++) {
            if (daftarMobil[i].getNama().equalsIgnoreCase(nama)) {
                System.out.println("Mobil ditemukan: " + daftarMobil[i]);
                ditemukan = true;
            }
        }
        
        if (ditemukan == false) {
            System.out.println("Mobil tidak ditemukan.");
        }
    }

    // Searching Berdasarkan Rentang Harga (Binary Search)
    public static void cariMobilHarga() {
        sc.nextLine();
        System.out.print("Masukkan harga minimum: ");
        int hargaMin = sc.nextInt();
        System.out.print("Masukkan harga maksimum: ");
        int hargaMax = sc.nextInt();
        boolean ditemukan = false;

        // Pastikan data sudah diurutkan
        bubbleSortHarga(true);

        // Binary Search untuk menemukan rentang harga
        int left = 0;
        int right = jumlahMobil - 1;
        int start = -1;
        int end = -1;

        // Cari batas bawah
        while (left <= right) {
            int mid = left + (right - left) / 2;
            if (daftarMobil[mid].getHargaCash() >= hargaMin) {
                start = mid;
                right = mid - 1;
            } else {
                left = mid + 1;
            }
        }

        // Cari batas atas
        left = 0;
        right = jumlahMobil - 1;
        while (left <= right) {
            int mid = left + (right - left) / 2;
            if (daftarMobil[mid].getHargaCash() <= hargaMax) {
                end = mid;
                left = mid + 1;
            } else {
                right = mid - 1;
            }
        }

        // Menampilkan hasil pencarian
        if (start != -1 && end != -1 && start <= end) {
            System.out.println("Mobil ditemukan dalam rentang harga:");
            for (int i = start; i <= end; i++) {
                System.out.println(daftarMobil[i]);
            }
            ditemukan = true;
        }

        if (!ditemukan) {
            System.out.println("Tidak ada mobil yang ditemukan dalam rentang harga tersebut.");
        }
    }


    public static void manajemenTransaksi() {
        int pilihan;
        do {
            System.out.println("\nMenu Manajemen Transaksi:");
            System.out.println("1. Transaksi Baru");
            System.out.println("2. Histori Transaksi");
            System.out.println("3. Edit Histori Transaksi");
            System.out.println("4. Hapus Histori Transaksi");
            System.out.println("5. Omzet Penjualan");
            System.out.println("0. Kembali ke Menu Utama");
            System.out.print("Pilih: ");
            pilihan = sc.nextInt();

            switch (pilihan) {
                case 1:
                    tambahTransaksi();
                    break;
                case 2:
                    lihatTransaksi();
                    break;
                case 3:
                    editTransaksi();
                    break;
                case 4:
                    hapusTransaksi();
                    break;
                case 5:
                    omzetPenjualan();
                    break;
                case 0:
                    System.out.println("Kembali ke Menu Utama.");
                    return;
                default:
                    System.out.println("Pilihan tidak valid.");
                    break;
            }
        } while (pilihan != 6);
    }

    public static void tambahTransaksi() {
        System.out.print("ID Mobil: ");
        String idMobil = sc.next();
        sc.nextLine();
        System.out.print("Nama Pembeli: ");
        String namaPembeli = sc.nextLine();
        System.out.print("No. HP Pembeli: ");
        String noHpPembeli = sc.nextLine();
        System.out.print("Metode Pembayaran (Cash/Kredit): ");
        String metodePembayaran = sc.nextLine();
        System.out.print("Tanggal Pembelian: ");
        String tanggalPembelian = sc.nextLine();
        System.out.print("Sales: ");
        String sales = sc.nextLine();
    
        // Cari mobil berdasarkan ID
        Mobil mobil = null;
        for (int i = 0; i < jumlahMobil; i++) {
            if (daftarMobil[i].getId().equals(idMobil)) {
                mobil = daftarMobil[i];
                break;
            }
        }
    
        if (mobil == null) {
            System.out.println("Mobil dengan ID tersebut tidak ditemukan.");
            return;
        }
    
        int omzet = 0;
        if (metodePembayaran.equalsIgnoreCase("Cash")) {
            omzet = mobil.getHargaCash();
        } else if (metodePembayaran.equalsIgnoreCase("Kredit")) {
            omzet = mobil.getHargaKredit();
        } else {
            System.out.println("Metode pembayaran tidak valid.");
            return;
        }
    
        String idTransaksi = "T" + transaksiCounter++;
        TransaksiDetail transaksi = new TransaksiDetail(idTransaksi, idMobil, namaPembeli, noHpPembeli, metodePembayaran, tanggalPembelian, sales, omzet);
        transaksiQueue.tambahTransaksi(transaksi);
        System.out.println("Transaksi berhasil ditambahkan!\n");
    }

    public static void lihatTransaksi() {
        transaksiQueue.lihatTransaksi();
    }

    public static void editTransaksi() {
        System.out.print("Masukkan ID Transaksi yang ingin diubah: ");
        String idTransaksi = sc.next();
        boolean found = false;
    
        for (int i = 0; i < transaksiQueue.getSize(); i++) {
            TransaksiDetail transaksi = transaksiQueue.get(i);
            if (transaksi.getIdTransaksi().equals(idTransaksi)) {
                System.out.println("Data transaksi yang ingin diubah:");
                System.out.println(transaksi);
    
                sc.nextLine();
    
                System.out.print("ID Mobil baru (" + transaksi.getIdMobil() + "): ");
                String idMobil = sc.nextLine();
                if (!idMobil.isEmpty()) {
                    transaksi.setIdMobil(idMobil);
                }
    
                System.out.print("Nama Pembeli baru (" + transaksi.getNamaPembeli() + "): ");
                String namaPembeli = sc.nextLine();
                if (!namaPembeli.isEmpty()) {
                    transaksi.setNamaPembeli(namaPembeli);
                }
    
                System.out.print("No. HP Pembeli baru (" + transaksi.getNoHpPembeli() + "): ");
                String noHpPembeli = sc.nextLine();
                if (!noHpPembeli.isEmpty()) {
                    transaksi.setNoHpPembeli(noHpPembeli);
                }
    
                System.out.print("Metode Pembayaran baru (" + transaksi.getMetodePembayaran() + "): ");
                String metodePembayaran = sc.nextLine();
                if (!metodePembayaran.isEmpty()) {
                    transaksi.setMetodePembayaran(metodePembayaran);
    
                    // Cari mobil berdasarkan ID
                    Mobil mobil = null;
                    for (int j = 0; j < jumlahMobil; j++) {
                        if (daftarMobil[j].getId().equals(transaksi.getIdMobil())) {
                            mobil = daftarMobil[j];
                            break;
                        }
                    }
    
                    if (mobil != null) {
                        int omzet = 0;
                        if (metodePembayaran.equalsIgnoreCase("Cash")) {
                            omzet = mobil.getHargaCash();
                        } else if (metodePembayaran.equalsIgnoreCase("Kredit")) {
                            omzet = mobil.getHargaKredit();
                        } else {
                            System.out.println("Metode pembayaran tidak valid.");
                            return;
                        }
                        transaksi.setOmzet(omzet);
                    } else {
                        System.out.println("Mobil dengan ID tersebut tidak ditemukan.");
                    }
                }
    
                System.out.print("Tanggal Pembelian baru (" + transaksi.getTanggalPembelian() + "): ");
                String tanggalPembelian = sc.nextLine();
                if (!tanggalPembelian.isEmpty()) {
                    transaksi.setTanggalPembelian(tanggalPembelian);
                }
    
                System.out.print("Sales baru (" + transaksi.getSales() + "): ");
                String sales = sc.nextLine();
                if (!sales.isEmpty()) {
                    transaksi.setSales(sales);
                }
    
                System.out.println("Data transaksi berhasil diubah.");
                found = true;
                break;
            }
        }
    
        if (!found) {
            System.out.println("Transaksi dengan ID tersebut tidak ditemukan.");
        }
    }

    public static void hapusTransaksi() {
        System.out.print("Masukkan ID Transaksi yang ingin dihapus: ");
        String idTransaksi = sc.next();
        boolean found = false;

        for (int i = 0; i < transaksiQueue.getSize(); i++) {
            TransaksiDetail transaksi = transaksiQueue.get(i);
            if (transaksi.getIdTransaksi().equals(idTransaksi)) {
                // Menampilkan data transaksi yang akan dihapus
                System.out.println("Data transaksi yang akan dihapus:");
                System.out.println(transaksi);

                // Konfirmasi penghapusan
                System.out.print("Apakah Anda yakin ingin menghapus transaksi ini? (y/n): ");
                String konfirmasi = sc.next();

                if (konfirmasi.equalsIgnoreCase("y")) {
                    transaksiQueue.hapusTransaksi();
                    System.out.println("Transaksi dengan ID " + idTransaksi + " berhasil dihapus.");
                } else {
                    System.out.println("Penghapusan transaksi dibatalkan.");
                }
                found = true;
                break;
            }
        }

        if (!found) {
            System.out.println("Transaksi dengan ID tersebut tidak ditemukan.");
        }
    }

    public static void omzetPenjualan() {
        int totalOmzet = 0;
        for (int i = 0; i < transaksiQueue.getSize(); i++) {
            TransaksiDetail transaksi = transaksiQueue.get(i);
            totalOmzet += transaksi.getOmzet();
        }
        System.out.println("Total Omzet Penjualan: " + totalOmzet);
    }

    public static void manajemenSales() {
        int pilihanAktivitas;
        do {
            System.out.println("\n\t=== Manajemen Sales ===\t");
            System.out.println("1. Daftar Sales");
            System.out.println("2. Tambah Sales Baru");
            System.out.println("3. Edit Info Sales");
            System.out.println("4. Hapus Sales");
            System.out.println("5. Performa Sales");
            System.out.println("0. Kembali ke Menu Utama");
            System.out.print("Pilih aktivitas: ");
            pilihanAktivitas = sc.nextInt();
    
            switch (pilihanAktivitas) {
                case 1:
                    lihatSales();
                    break;
                case 2:
                    tambahSales();
                    break;
                case 3:
                    editSales();
                    break;
                case 4:
                    hapusSales();
                    break;
                case 5:
                    performaSales();
                    break;
                case 0:
                    System.out.println("Kembali ke Menu Utama.");
                    break;
                default:
                    System.out.println("Pilihan tidak valid.");
                    break;
            }
        } while (pilihanAktivitas != 0);
    }
    
    public static void lihatSales() {
        if (jumlahSales == 0) {
            System.out.println("Tidak ada data sales.");
            return;
        }
        System.out.println("\nDaftar Sales:");
        for (int i = 0; i < jumlahSales; i++) {
            System.out.println("---" + daftarSales[i]);
        }
    }
    
    public static void tambahSales() {
        String idSales = "S" + String.format("%02d", jumlahSales + 1);
        sc.nextLine();
        System.out.print("Nama Sales: ");
        String nama = sc.nextLine();
    
        // Simpan status sebelum perubahan ke undo stack
        undoStackSales.push(daftarSales.clone());
        redoStackSales.clear();
        lastAction = "sales";

        daftarSales[jumlahSales++] = new Sales(idSales, nama);
        System.out.println("Data sales berhasil ditambahkan!\n");
    }
    
    public static void editSales() {
        System.out.print("Masukkan ID Sales yang ingin diubah: ");
        String idSales = sc.next();
        boolean found = false;
    
        for (int i = 0; i < jumlahSales; i++) {
            if (daftarSales[i].getId().equals(idSales)) {
                System.out.println("Data sales yang ingin diubah:");
                System.out.println("ID: " + daftarSales[i].getId());
                System.out.println("Nama: " + daftarSales[i].getNama());
    
                sc.nextLine();
    
                System.out.print("Nama baru (" + daftarSales[i].getNama() + "): ");
                String nama = sc.nextLine();
                if (!nama.isEmpty()) {
                    // Simpan status sebelum perubahan ke undo stack
                    undoStackSales.push(daftarSales.clone());
                    redoStackSales.clear();
                    lastAction = "sales";

                    daftarSales[i].setNama(nama);
                }
    
                System.out.println("Data sales berhasil diubah.");
                found = true;
                break;
            }
        }
    
        if (!found) {
            System.out.println("Sales dengan ID tersebut tidak ditemukan.");
        }
    }
    
    public static void hapusSales() {
        System.out.print("Masukkan ID Sales yang ingin dihapus: ");
        String idSales = sc.next();
        boolean found = false;
    
        for (int i = 0; i < jumlahSales; i++) {
            if (daftarSales[i].getId().equals(idSales)) {
                // Simpan status sebelum perubahan ke undo stack
                undoStackSales.push(daftarSales.clone());
                redoStackSales.clear();
                lastAction = "sales";
                
                // Geser elemen-elemen setelah elemen yang dihapus ke kiri
                for (int j = i; j < jumlahSales - 1; j++) {
                    daftarSales[j] = daftarSales[j + 1];
                }
                jumlahSales--;
                System.out.println("Sales dengan ID " + idSales + " berhasil dihapus.");
                found = true;
                break;
            }
        }
    
        if (!found) {
            System.out.println("Sales dengan ID tersebut tidak ditemukan.");
        }
    }
    
    public static void performaSales() {
        if (jumlahSales == 0) {
            System.out.println("Tidak ada data sales.");
            return;
        }
    
        System.out.println("\nPerforma Sales:");
        for (int i = 0; i < jumlahSales; i++) {
            Sales sales = daftarSales[i];
            int totalKomisi = 0;
    
            for (int j = 0; j < transaksiQueue.getSize(); j++) {
                TransaksiDetail transaksi = transaksiQueue.get(j);
                if (transaksi.getSales().equals(sales.getNama())) {
                    totalKomisi += transaksi.getOmzet() * 0.05;
                }
            }
    
            System.out.println("ID: " + sales.getId() + ", Nama: " + sales.getNama() + ", Total Komisi: " + totalKomisi);
        }
    }

    public static void undo() {
        if (lastAction.equals("mobil") && !undoStackMobil.isEmpty()) {
            redoStackMobil.push(daftarMobil.clone());
            daftarMobil = undoStackMobil.pop();
            System.out.println("Undo berhasil dilakukan pada data mobil.");
        } else if (lastAction.equals("sales") && !undoStackSales.isEmpty()) {
            redoStackSales.push(daftarSales.clone());
            daftarSales = undoStackSales.pop();
            System.out.println("Undo berhasil dilakukan pada data sales.");
        } else {
            System.out.println("Tidak ada aksi yang bisa di-undo.");
        }
    }

    public static void redo() {
        if (lastAction.equals("mobil") && !redoStackMobil.isEmpty()) {
            undoStackMobil.push(daftarMobil.clone());
            daftarMobil = redoStackMobil.pop();
            System.out.println("Redo berhasil dilakukan pada data mobil.");
        } else if (lastAction.equals("sales") && !redoStackSales.isEmpty()) {
            undoStackSales.push(daftarSales.clone());
            daftarSales = redoStackSales.pop();
            System.out.println("Redo berhasil dilakukan pada data sales.");
        } else {
            System.out.println("Tidak ada aksi yang bisa di-redo.");
        }
    }
}