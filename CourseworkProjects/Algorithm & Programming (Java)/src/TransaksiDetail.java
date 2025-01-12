public class TransaksiDetail {
    private String idTransaksi;
    private String idMobil;
    private String namaPembeli;
    private String noHpPembeli;
    private String metodePembayaran;
    private String tanggalPembelian;
    private String sales;
    private int omzet;

    public TransaksiDetail(String idTransaksi, String idMobil, String namaPembeli, String noHpPembeli, String metodePembayaran, String tanggalPembelian, String sales, int omzet) {
        this.idTransaksi = idTransaksi;
        this.idMobil = idMobil;
        this.namaPembeli = namaPembeli;
        this.noHpPembeli = noHpPembeli;
        this.metodePembayaran = metodePembayaran;
        this.tanggalPembelian = tanggalPembelian;
        this.sales = sales;
        this.omzet = omzet;
    }

    public String getIdTransaksi() {
        return idTransaksi;
    }

    public String getIdMobil() {
        return idMobil;
    }

    public String getNamaPembeli() {
        return namaPembeli;
    }

    public String getNoHpPembeli() {
        return noHpPembeli;
    }

    public String getMetodePembayaran() {
        return metodePembayaran;
    }

    public String getTanggalPembelian() {
        return tanggalPembelian;
    }

    public String getSales() {
        return sales;
    }

    public int getOmzet() {
        return omzet;
    }

    public void setIdMobil(String idMobil) {
        this.idMobil = idMobil;
    }

    public void setNamaPembeli(String namaPembeli) {
        this.namaPembeli = namaPembeli;
    }

    public void setNoHpPembeli(String noHpPembeli) {
        this.noHpPembeli = noHpPembeli;
    }

    public void setMetodePembayaran(String metodePembayaran) {
        this.metodePembayaran = metodePembayaran;
    }

    public void setTanggalPembelian(String tanggalPembelian) {
        this.tanggalPembelian = tanggalPembelian;
    }

    public void setSales(String sales) {
        this.sales = sales;
    }

    public void setOmzet(int omzet) {
        this.omzet = omzet;
    }

    @Override
    public String toString() {
        return "ID Transaksi: " + idTransaksi + ", ID Mobil: " + idMobil + ", Nama Pembeli: " + namaPembeli + ", No. HP Pembeli: " + noHpPembeli + ", Metode Pembayaran: " + metodePembayaran + ", Tanggal Pembelian: " + tanggalPembelian + ", Sales: " + sales + ", Omzet: " + omzet;
    }
}