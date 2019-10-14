<template>
    <v-app v-cloak>
        <v-content>
            <v-card class="cyan lighten-5" flat style="min-height: calc(100vh - 52px);">
                <v-toolbar color="cyan" dark extended flat>
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="$router.push({ name: 'home' })">
                        <v-icon>account_circle</v-icon>
                    </v-btn>
                </v-toolbar>

                <v-card class="mx-auto" max-width="700" style="margin-top: -64px;">
                    <v-toolbar flat>
                        <v-toolbar-title>IKP-ASN Kabupaten Tangerang</v-toolbar-title>
                    </v-toolbar>
                    <v-divider></v-divider>
                    <v-card-text class="subtitle-2">
                        <v-img class="mx-auto my-10" src="/images/logo-kabtang.png" max-width="180"></v-img>
                        <v-row>
                            <v-col cols="12">
                                <v-text-field
                                    color="cyan"
                                    label="Nomor Induk Pegawai"
                                    v-model="nip"
                                    autocomplete="off"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col class="text-justify" cols="12">
                                <p>Dalam rangka menyiapkan Program Pengembangan Kompetensi Aparatur T.A. 2020, Pemerintah Kabupaten Tangerang cq Badan Pengembangan Sumber Daya Manusia Daerah (BPSDMD) saat ini tengah melakukan Identifikasi Kebutuhan Pelatihan (IKP) seluruh ASN Kabupaten Tangerang.</p>
                                <p>Melalui kuesioner ini Anda diminta untuk mengenali dan menentukan kegiatan pengembangan kompetensi yang tepat, sesuai kebutuhan organisasi dan pengembangan diri selaku Aparatur profesional.</p>
                                <p>Silakan tentukan pilihan Anda, dan bubuhkan keterangan secukupnya pada kolom yang disediakan.</p>
                            </v-col>
                        </v-row>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="cyan" text @click="openForm">selanjutnya</v-btn>
                    </v-card-actions>
                </v-card>
            </v-card>
        </v-content>

        <v-footer class="cyan lighten-4">
            <v-col class="text-center overline" cols="12">
                <span>BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH - KABUPATEN TANGERANG &copy; 2019</span>
            </v-col>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    name: 'page-landing',

    route: [
        { path: '/', name: 'welcome' }
    ],

    data:() => ({
        nip: null
    }),

    methods: {
        openForm: function() {
            this.$router.push({ name: 'quest-form', params: { nip: this.nip } });
        }
    }
}
</script>