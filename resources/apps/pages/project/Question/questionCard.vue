<template>
    <div class="questeditor__card grey lighten-5">
        <div class="d-block">
            <div class="questeditor__item questeditor__state--inactive">
                <div class="questeditor__cursor">
                    <div class="questeditor__cursor--line"></div>
                </div>

                <div class="questeditor__content">
                    <div class="questeditor__quest">
                        <v-row>
                            <v-col class="overline pb-0" cols="12">
                                <div class="d-block">pertanyaan</div>
                            </v-col>

                            <v-col cols="8">
                                <v-textarea
                                    class="title font-weight-regular"
                                    label="Pertanyaan"
                                    v-model="value.text"
                                    rows="1"
                                    auto-grow
                                    single-line
                                    hide-details
                                ></v-textarea>
                            </v-col>

                            <v-col cols="4" id="dropdown" style="align-self: flex-end;">
                                <v-overflow-btn
                                    :items="types"
                                    label="Pilih Jenis"
                                    v-model="value.mode"
                                    target="#dropdown"
                                    hide-details
                                    style="margin-top: 7px;"
                                ></v-overflow-btn>
                            </v-col>
                        </v-row>
                    </div>

                    <div class="questeditor__answer">
                        <v-row>
                            <template v-if="value.mode === 'options'">
                                <v-col cols="12" v-for="(item, index) in value.items" :key="index">
                                    <v-text-field
                                        append-outer-icon="close"
                                        prepend-icon="radio_button_unchecked"
                                        label="Option 1"
                                        v-model="value.items[index]"
                                        single-line
                                        hide-details
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12">
                                    <v-input
                                        class="mt-4"
                                        prepend-icon="radio_button_unchecked"
                                        single-line
                                        hide-details
                                    >
                                        <div class="subtitle-2 font-weight-regular mt-1">
                                            <a @click="addOption">Tambah Opsi</a>
                                        </div>
                                    </v-input>
                                </v-col>
                            </template>

                            <template v-else>
                                <v-col cols="8">
                                    <v-text-field label="Text Jawaban Pendek" disabled></v-text-field>
                                </v-col>

                                <v-col cols="4"></v-col>
                            </template>
                        </v-row>
                    </div>

                    <div class="questeditor__action">
                        <v-divider></v-divider>
                        <div class="d-flex align-center py-3 pr-4">
                            <v-spacer></v-spacer>
                            
                            <v-tooltip bottom>
                                <template v-slot:activator="{ on }">
                                    <v-btn icon v-on="on" @click="$emit('delete', index)"><v-icon>delete</v-icon></v-btn>
                                </template>
                                <span>Hapus Pertanyaan</span>
                            </v-tooltip>
                            
                            <v-divider class="ml-2 mr-5" vertical></v-divider>
                            
                            <v-switch 
                                v-model="value.active"
                                class="ma-0 pa-0 font-weight-bold" 
                                inset 
                                label="Aktifkan" 
                                hide-details
                            ></v-switch>
                            
                            <v-divider class="ml-4 mr-5" vertical></v-divider>

                            <v-switch 
                                v-model="value.indicator"
                                class="ma-0 pa-0 font-weight-bold" 
                                inset 
                                label="Identifikasi" 
                                hide-details
                            ></v-switch>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'question-card',

    props: {
        index: Number,
        value: Object
    },

    data:() => ({
        types: [
            { text: 'Jawaban Pendek', value: 'textfield' },
            { text: 'Pilihan Ganda', value: 'options' },
        ]
    }),

    methods: {
        addOption: function() {
            this.value.items.push('Option' + (this.value.items.length + 1));
        }
    }
}
</script>