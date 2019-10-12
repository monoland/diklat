<template>
    <v-app v-cloak>
        <v-content class="deep-purple lighten-5">
            <v-card class="transparent pb-10" flat style="min-height: calc(100vh - 52px);">
                <v-toolbar color="deep-purple" dark extended flat>
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                </v-toolbar>

                <v-card class="mx-auto" max-width="700" style="margin-top: -64px;">
                    <v-toolbar flat>
                        <v-toolbar-title>IKP-ASN Kabupaten Tangerang</v-toolbar-title>
                    </v-toolbar>
                    <v-divider></v-divider>
                    <v-card-text>
                        <v-window v-model="step">
                            <v-window-item :value="1">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Data Responden
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <v-text-field
                                            label="Nama Lengkap"
                                            autocomplete="off"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Pangkat"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Level Jabatan"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="12">
                                        <v-text-field
                                            label="Jabatan"
                                            autocomplete="off"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Masa Jabatan"
                                            autocomplete="off"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Unit Kerja"
                                            autocomplete="off"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="12">
                                        <v-text-field
                                            label="Organisasi Perangkat Daerah"
                                            autocomplete="off"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="4">
                                        <v-text-field
                                            label="Jenis Kelamin"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="4">
                                        <v-text-field
                                            label="Usia"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="4">
                                        <v-text-field
                                            label="Pendidikan Terakhir"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="2">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Kompetensi Teknis Substantif Bidang Pekerjaan
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Pekerjaan teknis apakah di unit kerja Anda saat ini yang menurut Anda sangat penting, namun kinerjanya masih terkendala kurangnya kompetensi yang Anda miliki?</p>
                                        <v-text-field
                                            label="Jawaban Anda"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Bimtek/Workshop apakah yang paling Anda butuhkan untuk mendukung pekerjaan tersebut diatas?</p>
                                        <v-text-field
                                            label="Jawaban Anda"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="3">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Certificate of Competence
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah pekerjaan/jabatan Anda saat ini mempersyaratkan dimilikinya sertifikat keahlian tertentu?</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Bila ya, sertifikat keahlian apakah yang dimaksud?</p>
                                        <v-text-field
                                            label="Jawaban Anda"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda selaku pemangku jabatan/pekerjaan telah memiliki sertifikat yang dipersyaratkan tersebut?</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="4">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Kesesuaian Jabatan dengan Latar Pendidikan
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah jabatan Anda saat ini sesuai dengan latar belakang pendidikan Anda?</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sudah pernah mengikuti 2 (dua) jenis diklat teknis yang relevan dengan jabatan Anda saat ini?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                            <v-radio label="Baru 1 (satu) jenis diklat teknis relevan yang pernah saya ikuti" :value="2"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Bila Anda belum pernah mengikuti, dua jenis diklat teknis apakah yang saat ini paling ingin Anda ikuti?</p>
                                        <v-text-field
                                            label="Jawaban Anda"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-window-item>


                            <v-window-item :value="5">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Job Aids
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah di tempat Anda bekerja cukup tersedia Dokumen Panduan Kerja seperti SOP/ Manual/ Pedoman/ Juklak/ Juknis yang mempermudah Anda dalam menjalankan tugas?</p>
                                        <v-radio-group>
                                            <v-radio label="Ya, tersedia lengkap" :value="1"></v-radio>
                                            <v-radio label="Kurang tersedia" :value="0"></v-radio>
                                            <v-radio label="Sama sekali tidak ada" :value="0"></v-radio>
                                            <v-radio label="Tidak tahu" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Bila belum tersedia, pedoman kerja apakah yang paling penting harus ada di tempat Anda bekerja?</p>
                                        <v-text-field
                                            label="Jawaban Anda"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="6">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Leadership (khusus Es II, III, dan IV)
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Pemimpin Unit Kerja yang efektif ditandai antara lain dari kemampuannya dalam berkomunikasi; berkoordinasi; membangun teamwork;  menggerakkan bawahan; mengendalikan kegiatan; memotivasi dan menginsipirasi anak buah; memberdayakan dan mengembangkan anak buah; mengelola sumberdaya organisasi; mengendalikan mutu serta capaian kinerja.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai pejabat sudah menjadi Pemimpin Unit Kerja yang efektif ?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan pelatihan "Strategi Menjadi Pemimpin Unit Kerja Yang Efektif"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="7">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Problem Solving (khusus Es II, III, dan IV)
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Kemampuan "Problem Solving" yang efektif antara lain diindikasikan dari penguasaan seorang pejabat tentang konsep inovasi; peran fungsi tujuan organisasi; pemahaman tentang program & kegiatan; pemahaman terhadap tujuan yang hendak diraih, mulai dari output, outcome, benefit & impact; teknik mengidentifikasi isu strategis; teknik memahami kondisi organisasi saat ini dan kondisi yang diinginkan; teknik analisis penyebab masalah; teknik menentukan alternatif solusi, serta teknik penentuan prioritas pemecahan masalah.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah sebagai pejabat Anda sudah memiliki kemampuan "Problem Solving" yang efektif ?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan Pelatihan "Teknik Problem Solving"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="8">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Presentasi Efektif (Khusus Es II, III, dan IV)
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Kemampuan presentasi yang efektif antara lain ditandai dari kemampuan pejabat dalam: menuangkan outline gagasan; menyusun kerangka berpikir; menyusun slide powerpoint yang efektif; melakukan komunikasi verbal yang menarik; memancing motivasi/ketertarikan peserta; mengaitkan materi dengan kebutuhan peserta; mengenergize peserta; mengelola suasana; merespon dan mengapresiasi umpan balik; menguatkan gagasan; mengambil kesimpulan; dan merumuskan tindaklanjut.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai pejabat sudah memiliki kemampuan presentasi yang efektif?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan pelatihan "Teknik Presentasi Efektif"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="9">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Perencanaan (Khusus Es II, III, dan IV)
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Kompetensi menyusun perencanaan yang efektif antara lain diindikasikan dari penguasaan seorang pejabat akan:  RPJP, RPJM, RENSTRA, RENJA; pemahaman tentang Indikator Kinerja Utama; Siklus APBD, teknik penyusunan TOR/KAK; teknik penyusunan RKA; teknik penyusunan ROK.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai pejabat sudah memiliki kompetensi menyusun perencanaan yang efektif?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan Pelatihan "Teknik Menyusun Perencanaan Kinerja yang Efektif"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="10">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Tata Naskah Dinas
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Kemampuan "Tata Naskah Dinas" yang efektif antara lain ditandai dari penguasaan pejabat/pelaksana tersebut dalam; jenis dan format naskah dinas; teknik penyusunan naskah dinas; kewenangan penandatanganan; dan pengamanan naskah dinas.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai ASN (Pejabat/ Pelaksana) sudah memiliki kemampuan "Tata Naskah Dinas" yang efektif?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan Pelatihan "Tata Naskah Dinas"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="11">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Legal Drafting
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Apabila pekerjaan Anda berhubungan dengan penyusunan produk peraturan, atau berkepentingan untuk memahami, atau Anda akan ditugaskan menangani bidang pekerjaan ini, silahkan jawab pertanyaan dibawah ini.  Bila Anda tidak berkepentingan, maka silahkan bagian ini dilewati.</p>
                                        <p class="subtitle-2">Pejabat/Pelaksana yang memiliki kemampuan "Legal Drafting" yang efektif antara lain ditandai dari penguasaannya terhadap Dasar Pemikiran dan Keberlakuan Peraturan Perundang-undangan; Azas-azas Pembentukan Peraturan Perundang-undangan; Filosofi, mekanisme, syarat, dan Teknik Perancangan Pembentukan Peraturan Perundang-undangan; Fungsi dan Materi Muatan Perundang-undangan; Kegunaan Bahasa Hukum; Proses Perancangan; Relevansi partisipasi Stakeholder; dan Metode Penyusunan Naskah Akademik.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai Pejabat/Pelaksana sudah memiliki kemampuan "Legal Drafting" yang efektif?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan Pelatihan "Legal Drafting"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>

                            <v-window-item :value="12">
                                <v-banner single-line>
                                    <v-icon slot="icon" color="warning" size="36">assignment</v-icon>
                                    Telaahan Staf
                                </v-banner>

                                <v-row>
                                    <v-col cols="12">
                                        <p class="subtitle-2">Kemampuan "Telaahan Staf" yang efektif antara lain ditandai dari pemahamannya terhadap: Pentingnya Kejelasan Latar Belakang; Tujuan Penulisan; Landasan Peraturan / Perundang-undangan/Teori; Pembahasan: Kondisi Saat ini, Kondisi Yang Diharapkan, Kendala Yang dihadapi, Pemecahan Masalah; Kesimpulan dan Saran; Lampiran dan Daftar Pustaka.</p>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Apakah Anda sebagai ASN (Pejabat/ Pelaksana) sudah memiliki kemampuan "Telaahan Staf" yang efektif?</p>
                                        <v-radio-group>
                                            <v-radio label="Sudah" :value="1"></v-radio>
                                            <v-radio label="Belum" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>

                                    <v-col cols="12">
                                        <p class="subtitle-2">Saya membutuhkan Pelatihan "Telaahan Staf"</p>
                                        <v-radio-group>
                                            <v-radio label="Ya" :value="1"></v-radio>
                                            <v-radio label="Tidak" :value="0"></v-radio>
                                        </v-radio-group>
                                    </v-col>
                                </v-row>
                            </v-window-item>
                        </v-window>                        
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="deep-purple" text @click="step++">selanjutnya</v-btn>
                    </v-card-actions>
                </v-card>
            </v-card>
        </v-content>

        <v-footer class="deep-purple lighten-4">
            <v-col class="text-center overline" cols="12">
                <span>BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH - KABUPATEN TANGERANG &copy; 2019</span>
            </v-col>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    name: 'page-questions',

    route: [
        { path: '/form/:nip', name: 'quest-form' }
    ],

    data:() => ({
        step: 1
    })
}
</script>