Planning Laravel 9 SIMPEG:

<!-- updated plan -->
Routes:
- /dashboard
    - /sasaran_kerja_pegawai
        - /create
        - /{id}/edit
    - /komponen_penilaian_pekerjaan (KKP)
        - /aktivitas (CRUD Aktivitas)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /indikator_kinerja_utama (CRUD IKU)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /realisasi_anggaran (CRUD Realisasi)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /perilaku (CRUD Perilaku)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /indikator_kinerja_individu (CRUD IKI)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /intruksi_khusus_pimpinan (CRUD IKP)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
