public class Transaksi {
    private TransaksiDetail[] transaksiQueue; // Array sebagai queue
    private int front, rear, size, capacity;

    public Transaksi() {
        this.capacity = 20; // Kapasitas default
        this.transaksiQueue = new TransaksiDetail[capacity];
        this.front = 0; // Posisi elemen pertama
        this.rear = -1; // Posisi elemen terakhir
        this.size = 0;  // Jumlah elemen dalam queue
    }

    public void tambahTransaksi(TransaksiDetail transaksi) {
        if (isFull()) {
            System.out.println("Antrian transaksi penuh. Tidak bisa menambahkan transaksi.");
            return;
        }
        rear = (rear + 1) % capacity;
        transaksiQueue[rear] = transaksi;
        size++;
        System.out.println("Transaksi berhasil ditambahkan: " + transaksi);
    }

    // Lihat semua transaksi dalam queue
    public void lihatTransaksi() {
        if (isEmpty()) {
            System.out.println("Antrian transaksi kosong.");
            return;
        }
        System.out.println("Daftar Transaksi:");
        for (int i = 0; i < size; i++) {
            int index = (front + i) % capacity;
            System.out.println(transaksiQueue[index]);
        }
    }

    // Hapus transaksi dari queue
    public void hapusTransaksi() {
        if (isEmpty()) {
            System.out.println("Antrian transaksi kosong. Tidak ada transaksi yang dihapus.");
            return;
        }
        TransaksiDetail removed = transaksiQueue[front];
        front = (front + 1) % capacity;
        size--;
        System.out.println("Transaksi dihapus: " + removed);
    }

    // Cek apakah queue penuh
    private boolean isFull() {
        return size == capacity;
    }

    // Cek apakah queue kosong
    private boolean isEmpty() {
        return size == 0;
    }

    public int getSize() {
        return size;
    }

    public TransaksiDetail get(int index) {
        return transaksiQueue[(front + index) % capacity];
    }
}