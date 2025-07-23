<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'About Mission Edit',
        href: '/about/mission',
    },
];

const props = defineProps<{
    mission: {
        id: number;
        language: string;
        mission_title_eng: string;
        mission_description_eng: string;
        mission_sub_title1_eng: string;
        mission_sort_desc1_eng: string;
        mission_sub_title2_eng: string;
        mission_sort_desc2_eng: string;
        mission_title_fr: string;
        mission_description_fr: string;
        mission_sub_title1_fr: string;
        mission_sort_desc1_fr: string;
        mission_sub_title2_fr: string;
        mission_sort_desc2_fr: string;
        mission_image: string;
    };
}>();


const form = useForm({
    id: props.mission.id,
    language: props.mission.language,
    mission_title_eng: props.mission.mission_title_eng,
    mission_description_eng: props.mission.mission_description_eng,
    mission_sub_title1_eng: props.mission.mission_sub_title1_eng,
    mission_sort_desc1_eng: props.mission.mission_sort_desc1_eng,
    mission_sub_title2_eng: props.mission.mission_sub_title2_eng,
    mission_sort_desc2_eng: props.mission.mission_sort_desc2_eng,
    mission_title_fr: props.mission.mission_title_fr,
    mission_description_fr: props.mission.mission_description_fr,
    mission_sub_title1_fr: props.mission.mission_sub_title1_fr,
    mission_sort_desc1_fr: props.mission.mission_sort_desc1_fr,
    mission_sub_title2_fr: props.mission.mission_sub_title2_fr,
    mission_sort_desc2_fr: props.mission.mission_sort_desc2_fr,
    mission_image: props.mission.mission_image
});


function submit() {
    form.post('/about/mission/update/' + props.mission.id);
}

</script>

<template>

    <Head title="About Mission Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">About Mission Edit</h1>
                <Link :href="'/about/mission'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 shadow rounded">
                <form @submit.prevent="submit">
                    <div class="">
                        <div>
                            <label for="">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>
                    </div>

                    <div v-if="form.language === 'english'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="mission_title_eng" :label="'Mission Title (EN)'"
                            v-model="form.mission_title_eng" type="text"
                            :placeholder="'Enter mission title in English'" />

                        <InputLabel forr="mission_description_eng" :label="'Mission Description (EN)'"
                            v-model="form.mission_description_eng" type="text"
                            :placeholder="'Enter mission description in English'" />

                        <InputLabel forr="mission_sub_title1_eng" :label="'Sub Title 1 (EN)'"
                            v-model="form.mission_sub_title1_eng" type="text"
                            :placeholder="'Enter sub title 1 in English'" />

                        <InputLabel forr="mission_sort_desc1_eng" :label="'Sort Description 1 (EN)'"
                            v-model="form.mission_sort_desc1_eng" type="text"
                            :placeholder="'Enter sort description 1 in English'" />

                        <InputLabel forr="mission_sub_title2_eng" :label="'Sub Title 2 (EN)'"
                            v-model="form.mission_sub_title2_eng" type="text"
                            :placeholder="'Enter sub title 2 in English'" />

                        <InputLabel forr="mission_sort_desc2_eng" :label="'Sort Description 2 (EN)'"
                            v-model="form.mission_sort_desc2_eng" type="text"
                            :placeholder="'Enter sort description 2 in English'" />
                        <InputLabel forr="mission_image" :label="'Mission Image'" v-model="form.mission_image"
                            type="text" :placeholder="'Enter mission image url'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="mission_title_fr" :label="'Mission Title (FR)'"
                            v-model="form.mission_title_fr" type="text"
                            :placeholder="'Entrez le titre de la mission en français'" />

                        <InputLabel forr="mission_description_fr" :label="'Mission Description (FR)'"
                            v-model="form.mission_description_fr" type="text"
                            :placeholder="'Entrez la description de la mission en français'" />

                        <InputLabel forr="mission_sub_title1_fr" :label="'Sub Title 1 (FR)'"
                            v-model="form.mission_sub_title1_fr" type="text"
                            :placeholder="'Entrez le sous-titre 1 en français'" />

                        <InputLabel forr="mission_sort_desc1_fr" :label="'Sort Description 1 (FR)'"
                            v-model="form.mission_sort_desc1_fr" type="text"
                            :placeholder="'Entrez la description courte 1 en français'" />

                        <InputLabel forr="mission_sub_title2_fr" :label="'Sub Title 2 (FR)'"
                            v-model="form.mission_sub_title2_fr" type="text"
                            :placeholder="'Entrez le sous-titre 2 en français'" />

                        <InputLabel forr="mission_sort_desc2_fr" :label="'Sort Description 2 (FR)'"
                            v-model="form.mission_sort_desc2_fr" type="text"
                            :placeholder="'Entrez la description courte 2 en français'" />
                        <InputLabel forr="mission_image" :label="'Mission Image'" v-model="form.mission_image"
                            type="text" :placeholder="'Enter mission image url'" />
                    </div>


                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
