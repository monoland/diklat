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
                                <v-row>
                                    <v-col cols="12">
                                        <v-text-field
                                            label="Nama Lengkap"
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
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Masa Jabatan"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="6">
                                        <v-text-field
                                            label="Unit Kerja"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col cols="12">
                                        <v-text-field
                                            label="Organisasi Perangkat Daerah"
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
                        </v-window>                        
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="deep-purple" text @click="">selanjutnya</v-btn>
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