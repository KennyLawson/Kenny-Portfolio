public class Sales {
    String id;
    String nama;
    
    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public Sales(String id, String nama) {
        this.id = id;
        this.nama = nama;
    }

    public String toString() {
        return "ID: " + id + ", Nama: " + nama;
    }
}