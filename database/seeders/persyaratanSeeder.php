<?php

namespace Database\Seeders;

use App\Models\persyaratanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class persyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Permohonan pengesahan Site Plan Bupati Magetan Cq. Kepala Dinas Perumahan dan Kawasan Permukiman Kab. Magetan *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi IPR/ IL/ IPPT *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi IPR/ IL/ IPPT Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta Jual Beli, dan pelepasan hak), dilengkapi dengan scan peta bidang atau gambar hasil ukur ulang dari kantor pertanahan *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi :Akta Pendirian PT (berdasarkan Hukum) bergerak di bodang perumahan SK Menteri Hukum dan HAM beserta anggota asosiasi perumahan',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi PBB tahun berjalan *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi KTP *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Fotokopi KTP dan SKA Perencana (yang menggambar) *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Rekomendasi dari Bidang SDA Dinas PUPR *
             a. Jika lahan bangunan berbatasan dengan saluran irigasi
             b. Jika menutup saluran irigasi',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Rekomendasi dari Dinas PU Sumber Daya Air Provinsi *
            a. Jika lahan bangunan berbatasan dengan sungai
            b. Jika membuat jembatan ',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat keterangan bebas banjir dari dinas terkait (bial diperlukan) *',
        ]);
        persyaratanModel::create([
            // 'id' => 0,
            'persyaratan' => 'Surat Keterangan lain bila diperlukan',
        ]);
    }
}