<template>
    <v-page-wrap crud absolute searchable with-progress>
        <v-desktop-table v-if="desktop"
            single
        ></v-desktop-table>

        <v-mobile-table icon="perm_identity" v-else>
            <template v-slot:default="{ item }">
                <v-list-item-content>
                    <v-list-item-title>{{ item.name }}</v-list-item-title>
                    <v-list-item-subtitle class="f-nunito">{{ item.email }}</v-list-item-subtitle>
                </v-list-item-content>
            </template>
        </v-mobile-table>

        <v-page-form small>
            <div class="questeditor__field">
                <div class="questeditor__segment questeditor__state--inactive">
                    <div class="questeditor__cursor">
                        <div class="questeditor__cursor--line"></div>
                    </div>

                    <div class="questeditor__segment--wrap">
                        <div class="questeditor__segment--content">
                            <v-row no-gutters>
                                <v-col class="overline pb-0" cols="12">
                                    <div class="d-block">judul segment</div>
                                </v-col>

                                <v-col cols="12">
                                    <v-textarea v-model="record.name"
                                        class="headline"
                                        label="Judul Segment"
                                        rows="1"
                                        auto-grow
                                        single-line
                                        hide-details
                                    ></v-textarea>
                                </v-col>

                                <v-col cols="12">
                                    <v-textarea v-model="record.describe"
                                        class="describe"
                                        label="Keterangan"
                                        rows="1"
                                        auto-grow
                                        single-line
                                        hide-details
                                    ></v-textarea>
                                </v-col>

                                <v-col cols="12">
                                    <v-switch v-model="record.active"
                                        inset 
                                        label="Aktifkan segmen ini"
                                        hide-details
                                    ></v-switch>
                                </v-col>
                            </v-row>
                        </div>
                    </div>
                </div>

                <div class="questeditor__quests">
                    <question-card v-for="(item, index) in record.questions" :key="index"
                        :index="index"
                        v-model="record.questions[index]"
                        @delete="deleteQuestion"
                    ></question-card>
                    
                    <!-- end quests -->

                    <div class="questeditor__add">
                        <v-tooltip right>
                            <template v-slot:activator="{ on }">
                                <v-btn icon v-on="on" @click="addQuestion"><v-icon>add</v-icon></v-btn>
                            </template>
                            <span>Tambah Pertanyaan</span>
                        </v-tooltip>
                    </div>
                </div>
            </div>
        </v-page-form>
    </v-page-wrap>
</template>

<script>
import { pageMixins } from '@apps/mixins/PageMixins';
import QuestionCard from './questionCard';

export default {
    name: 'page-question',

    mixins: [pageMixins],

    route: [
        { path: 'question', name: 'question', root: 'monoland' },
    ],

    components: {
        'question-card': QuestionCard
    },

    data:() => ({
        // 
    }),

    created() {
        this.tableHeaders([
            { text: 'Name', value: 'name' },
            { text: 'Updated', value: 'updated_at', class: 'datetime-field' }
        ]);

        this.pageInfo({
            icon: 'people',
            title: 'Question',
        });

        this.dataUrl(`/api/subject`);

        this.setRecord({
            id: null,
            name: 'Judul Segment',
            describe: null,
            active: false,
            questions: []
        });
    },

    methods: {
        addQuestion: function() {
            this.record.questions.push({
                id: this.record.questions.length + 1,
                text: 'Pertanyaan',
                mode: 'options',
                items: ['Option1'],
                indicator: false,
                active: false
            });
        },

        deleteQuestion: function(index) {
            console.log(index);
            // this.record.questions.splice(index, 1);
        }
    }
};
</script>