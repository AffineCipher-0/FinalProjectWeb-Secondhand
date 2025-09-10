# ProjectNoWhere
==================================
📂 Struktur File & Keterkaitan
==================================
home/index.php
store.php
cart.php
checkout.php

📂 Keranjang
- keranjang.php → dipakai di header.php, checkout.php

📂 Shop
- shop.php → dipakai di action.php, body.php, checkout_process.php, homeaction.php, register.php

📂 Pembayaran
- pembayaran.php → dipakai di action.php
- pembayaran_process.php → dipakai di checkout.php
- pembayaran_success.php

📂 Login
- login.php (ketika login muncul "2021")
- login_form.php → cookie list_barang
- login.php → cookie list_barang

==================================
📂 Pembahasan Fitur Halaman Utama
==================================
- Login
- Register
- Pembayaran
- Checkout / Keranjang

==================================
📂 Pembahasan Fitur Halaman Admin
==================================
- Dashboard
  • Menampilkan User List
  • Menampilkan Categories List

- Add Users
  • Mengisi / menambahkan data user

- Product List
  • Menampilkan produk
  • Mengupdate produk

- Order
  • Menampilkan pesanan dari pengguna

- Add Product
  • Menambahkan produk
  • Mengupdate produk (sama seperti Product List)

- Manage User
  • Menambahkan user
  • Mengedit user

                [ home/index.php ]
                        |
        --------------------------------
        |                              |
   [ store.php ]                 [ cart.php ]
                                      |
                                [ checkout.php ]
                                      |
                     ---------------------------------
                     |                               |
            [ keranjang.php ]                 [ pembayaran.php ]
             (header.php,checkout.php)         (action.php)
                     |                               |
              [ shop.php ]                      [ pembayaran_process.php ]
  (action.php, body.php, checkout_process,             |
   homeaction.php, register.php)                [ pembayaran_success.php ]



===============================
          LOGIN
===============================
[ login_form.php ] ---- cookie list_barang
[ login.php ] ---------- cookie list_barang
          |
       (menampilkan "2021" saat login)


===============================
          ADMIN
===============================
[ Dashboard ]
   ├── User List
   ├── Categories List
[ Add Users ]
   └── Tambah user
[ Product List ]
   ├── Tampilkan produk
   └── Update produk
[ Order ]
   └── Lihat pesanan user
[ Add Product ]
   └── Tambah/update produk
[ Manage User ]
   └── Tambah/edit user

