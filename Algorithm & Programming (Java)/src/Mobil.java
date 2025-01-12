public class Mobil {
    String id;
    String merk;
    String nama;
    int kapasitas;
    int tahun;
    String tipe;
    int hargaCash;
    int hargaKredit;

    public Mobil(String id, String merk, String nama, int kapasitas, int tahun, String tipe, int hargaCash, int hargaKredit) {
        this.id = id;
        this.merk = merk;
        this.nama = nama;
        this.kapasitas = kapasitas;
        this.tahun = tahun;
        this.tipe = tipe;
        this.hargaCash = hargaCash;
        this.hargaKredit = hargaKredit;
    }

    // Getter dan Setter
    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }
    
    public String getMerk() {
        return merk;
    }

    public void setMerk(String merk) {
            this.merk = merk;
        }
    
    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public int getKapasitas() {
        return kapasitas;
    }

    public void setKapasitas(int kapasitas) {
        this.kapasitas = kapasitas;
    }

    public int getTahun() {
        return tahun;
    }

    public void setTahun(int tahun) {
        this.tahun = tahun;
    }

    public String getTipe() {
        return tipe;
    }

    public void setTipe(String tipe) {
        this.tipe = tipe;
    }

    public int getHargaCash() {
        return hargaCash;
    }

    public int getHargaKredit() {
        return hargaKredit;
    }

    public void setHargaCash(int hargaCash) {
        this.hargaCash = hargaCash;
    }

    public void setHargaKredit(int hargaKredit) {
        this.hargaKredit = hargaKredit;
    }

    public String toString() {
        return "ID: " + id + ", Merk: " + merk + ", Nama: " + nama + 
        ", Kapasitas Mesin: " + kapasitas + " cc" + ", Tahun Produksi: " + tahun + 
        ", Tipe: " + tipe + ", Harga Cash: Rp " + hargaCash + ", Harga Kredit: Rp " + hargaKredit;
    }

}
