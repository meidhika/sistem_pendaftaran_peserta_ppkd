<?php

if (!function_exists('getStatusLabel')) {
    /**
     * Fungsi untuk mendapatkan label status peserta
     *
     * @param int $status
     * @return string
     */
    function getStatusLabel($status)
    {
        switch ($status) {
            case 0:
                return '<span class="badge rounded-pill fs-6 text-bg-info">Pendaftar Pelatihan</span>';
            case 1:
                return '<span class="badge rounded-pill fs-6 text-bg-warning">Wawancara</span>';
            case 2:
                return '<span class="badge rounded-pill fs-6 text-bg-success">Lolos</span>';
            case 3:
                return '<span class="badge rounded-pill fs-6 text-bg-danger">Tidak Lolos</span>';
            default:
                return '<span class="badge rounded-pill fs-6 text-bg-dark">Tidak Diketahui</span>';
        }
    }
}
