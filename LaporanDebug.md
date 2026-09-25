## Dokumentasi Perbaikan Error

|  No.  | Lokasi Error             | Masalah                              | Solusi                                |
| :---: | :----------------------- | :----------------------------------- | :------------------------------------ |
| **1** | `ProdukController`       | Salah penulisan `Produks.create`     | Ubah menjadi `Produk.create`          |
| **2** | `detail_transaksi_table` | Salah penulisan `$table->bigInteger` | Perbaiki menjadi `$table->bigInteger` |

### Keterangan

### 1. Error pada `ProdukController`

**Penyebab:**
Error terjadi karena terdapat kesalahan dalam penulisan nama kode. Pada bagian pemanggilan view, tertulis `Produks.create`, sedangkan nama yang benar adalah `Produk.create`. Kesalahan penulisan tersebut menyebabkan sistem tidak dapat menemukan view yang dimaksud.

**Cara Memperbaiki:**
Memperbaiki penulisan kode dari `Produks.create` menjadi `Produk.create` agar sesuai dengan nama view yang digunakan.

---

### 2. Error pada Migration `detail_transaksi_table`

**Penyebab:**
Error terjadi karena terdapat kesalahan penulisan pada kode `$table->bigInteger`. Pada kode sebelumnya terdapat huruf yang kurang atau salah penulisan sehingga method tersebut tidak dikenali oleh Laravel.

**Cara Memperbaiki:**
Memperbaiki penulisan kode menjadi `$table->bigInteger` sesuai dengan method yang tersedia pada Laravel.
