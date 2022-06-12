Planning Laravel 9 SIMPEG:

Routes:
- / -> homepage
- /pegawai/login -> pegawai login page
- /pegawai/dashboard -> pegawai dashboard

- /pejabat_penilai/login -> pejabat penilai login page
- /pejabat_penilai/dashboard -> pejabat penilai dashboard

- /atasan_pejabat_penilai/login -> atasan pejabat penilai login page
- /atasan_pejebat_penilai/dashboard -> atasan pejabat penilai dashboard

- /kepala_urusan_kepegawaian/login -> kepala urusan kepegawaian login page
- /kepala_urusan_kepegawaian/dashboard -> kepala urusan kepegawaian dashboard

<!-- next -->
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
