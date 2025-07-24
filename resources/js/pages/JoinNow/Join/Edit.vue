<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Now Edit',
        href: '/join/now/banner',
    },
];

const props = defineProps<{
    joinNow: {
        id: number;
        language: string;
        join_heading_eng: string;
        join_sub_heading_eng: string;
        join_title_eng: string;
        join_description_eng: string;
        join_video_eng: string;
        join_list1_eng: string;
        join_list2_eng: string;
        join_list3_eng: string;
        join_list4_eng: string;
        join_list5_eng: string;
        join_card_icon1_eng: string;
        join_card_icon2_eng: string;
        join_card_icon3_eng: string;
        join_card_title1_eng: string;
        join_card_title2_eng: string;
        join_card_title3_eng: string;
        join_card_sub_title1_eng: string;
        join_card_sub_title2_eng: string;
        join_card_sub_title3_eng: string;
        join_heading_fr: string;
        join_sub_heading_fr: string;
        join_title_fr: string;
        join_description_fr: string;
        join_video_fr: string;
        join_list1_fr: string;
        join_list2_fr: string;
        join_list3_fr: string;
        join_list4_fr: string;
        join_list5_fr: string;
        join_card_icon1_fr: string;
        join_card_icon2_fr: string;
        join_card_icon3_fr: string;
        join_card_title1_fr: string;
        join_card_title2_fr: string;
        join_card_title3_fr: string;
        join_card_sub_title1_fr: string;
        join_card_sub_title2_fr: string;
        join_card_sub_title3_fr: string;
    };
}>();


const form = useForm({
    id: props.joinNow.id,
    language: props.joinNow.language,
    join_heading_eng: props.joinNow.join_heading_eng,
    join_sub_heading_eng: props.joinNow.join_sub_heading_eng,
    join_title_eng: props.joinNow.join_title_eng,
    join_description_eng: props.joinNow.join_description_eng,
    join_video_eng: props.joinNow.join_video_eng,
    join_list1_eng: props.joinNow.join_list1_eng,
    join_list2_eng: props.joinNow.join_list2_eng,
    join_list3_eng: props.joinNow.join_list3_eng,
    join_list4_eng: props.joinNow.join_list4_eng,
    join_list5_eng: props.joinNow.join_list5_eng,
    join_card_icon1_eng: props.joinNow.join_card_icon1_eng,
    join_card_icon2_eng: props.joinNow.join_card_icon2_eng,
    join_card_icon3_eng: props.joinNow.join_card_icon3_eng,
    join_card_title1_eng: props.joinNow.join_card_title1_eng,
    join_card_title2_eng: props.joinNow.join_card_title2_eng,
    join_card_title3_eng: props.joinNow.join_card_title3_eng,
    join_card_sub_title1_eng: props.joinNow.join_card_sub_title1_eng,
    join_card_sub_title2_eng: props.joinNow.join_card_sub_title2_eng,
    join_card_sub_title3_eng: props.joinNow.join_card_sub_title3_eng,
    join_heading_fr: props.joinNow.join_heading_fr,
    join_sub_heading_fr: props.joinNow.join_sub_heading_fr,
    join_title_fr: props.joinNow.join_title_fr,
    join_description_fr: props.joinNow.join_description_fr,
    join_video_fr: props.joinNow.join_video_fr,
    join_list1_fr: props.joinNow.join_list1_fr,
    join_list2_fr: props.joinNow.join_list2_fr,
    join_list3_fr: props.joinNow.join_list3_fr,
    join_list4_fr: props.joinNow.join_list4_fr,
    join_list5_fr: props.joinNow.join_list5_fr,
    join_card_icon1_fr: props.joinNow.join_card_icon1_fr,
    join_card_icon2_fr: props.joinNow.join_card_icon2_fr,
    join_card_icon3_fr: props.joinNow.join_card_icon3_fr,
    join_card_title1_fr: props.joinNow.join_card_title1_fr,
    join_card_title2_fr: props.joinNow.join_card_title2_fr,
    join_card_title3_fr: props.joinNow.join_card_title3_fr,
    join_card_sub_title1_fr: props.joinNow.join_card_sub_title1_fr,
    join_card_sub_title2_fr: props.joinNow.join_card_sub_title2_fr,
    join_card_sub_title3_fr: props.joinNow.join_card_sub_title3_fr,
});


function submit() {
    form.post('/join/now/update/' + props.joinNow.id);
}

</script>

<template>

    <Head title="Join Now Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Now Edit</h1>
                <Link :href="'/join/now'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 mb-10 shadow rounded">
                <form @submit.prevent="submit">
                    <div>
                        <!-- Language Selection -->
                        <div>
                            <label for="language">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>

                        <!-- ENGLISH FORM -->
                        <div v-if="form.language === 'english'" class="mt-5 space-y-6">

                            <!-- General Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_heading_eng" label="Heading (English)"
                                    v-model="form.join_heading_eng" type="text" />
                                <InputLabel forr="join_sub_heading_eng" label="Sub Heading (English)"
                                    v-model="form.join_sub_heading_eng" type="text" />
                                <InputLabel forr="join_title_eng" label="Title (English)" v-model="form.join_title_eng"
                                    type="text" />
                                <InputLabel forr="join_description_eng" label="Description (English)"
                                    v-model="form.join_description_eng" type="text" />
                                <InputLabel forr="join_video_eng" label="Video URL (English)"
                                    v-model="form.join_video_eng" type="text" />
                            </div>

                            <!-- Lists Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_list1_eng" label="List Item 1 (English)"
                                    v-model="form.join_list1_eng" type="text" />
                                <InputLabel forr="join_list2_eng" label="List Item 2 (English)"
                                    v-model="form.join_list2_eng" type="text" />
                                <InputLabel forr="join_list3_eng" label="List Item 3 (English)"
                                    v-model="form.join_list3_eng" type="text" />
                                <InputLabel forr="join_list4_eng" label="List Item 4 (English)"
                                    v-model="form.join_list4_eng" type="text" />
                                <InputLabel forr="join_list5_eng" label="List Item 5 (English)"
                                    v-model="form.join_list5_eng" type="text" />
                            </div>

                            <!-- Card Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_card_icon1_eng" label="Card Icon 1 (English)"
                                    v-model="form.join_card_icon1_eng" type="text" />
                                <InputLabel forr="join_card_icon2_eng" label="Card Icon 2 (English)"
                                    v-model="form.join_card_icon2_eng" type="text" />
                                <InputLabel forr="join_card_icon3_eng" label="Card Icon 3 (English)"
                                    v-model="form.join_card_icon3_eng" type="text" />

                                <InputLabel forr="join_card_title1_eng" label="Card Title 1 (English)"
                                    v-model="form.join_card_title1_eng" type="text" />
                                <InputLabel forr="join_card_title2_eng" label="Card Title 2 (English)"
                                    v-model="form.join_card_title2_eng" type="text" />
                                <InputLabel forr="join_card_title3_eng" label="Card Title 3 (English)"
                                    v-model="form.join_card_title3_eng" type="text" />

                                <InputLabel forr="join_card_sub_title1_eng" label="Card Sub Title 1 (English)"
                                    v-model="form.join_card_sub_title1_eng" type="text" />
                                <InputLabel forr="join_card_sub_title2_eng" label="Card Sub Title 2 (English)"
                                    v-model="form.join_card_sub_title2_eng" type="text" />
                                <InputLabel forr="join_card_sub_title3_eng" label="Card Sub Title 3 (English)"
                                    v-model="form.join_card_sub_title3_eng" type="text" />
                            </div>
                        </div>

                        <!-- FRENCH FORM -->
                        <div v-if="form.language === 'france'" class="mt-5 space-y-6">

                            <!-- General Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_heading_fr" label="Heading (French)"
                                    v-model="form.join_heading_fr" type="text" />
                                <InputLabel forr="join_sub_heading_fr" label="Sub Heading (French)"
                                    v-model="form.join_sub_heading_fr" type="text" />
                                <InputLabel forr="join_title_fr" label="Title (French)" v-model="form.join_title_fr"
                                    type="text" />
                                <InputLabel forr="join_description_fr" label="Description (French)"
                                    v-model="form.join_description_fr" type="text" />
                                <InputLabel forr="join_video_fr" label="Video URL (French)" v-model="form.join_video_fr"
                                    type="text" />
                            </div>

                            <!-- Lists Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_list1_fr" label="List Item 1 (French)"
                                    v-model="form.join_list1_fr" type="text" />
                                <InputLabel forr="join_list2_fr" label="List Item 2 (French)"
                                    v-model="form.join_list2_fr" type="text" />
                                <InputLabel forr="join_list3_fr" label="List Item 3 (French)"
                                    v-model="form.join_list3_fr" type="text" />
                                <InputLabel forr="join_list4_fr" label="List Item 4 (French)"
                                    v-model="form.join_list4_fr" type="text" />
                                <InputLabel forr="join_list5_fr" label="List Item 5 (French)"
                                    v-model="form.join_list5_fr" type="text" />
                            </div>

                            <!-- Card Section -->
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_card_icon1_fr" label="Card Icon 1 (French)"
                                    v-model="form.join_card_icon1_fr" type="text" />
                                <InputLabel forr="join_card_icon2_fr" label="Card Icon 2 (French)"
                                    v-model="form.join_card_icon2_fr" type="text" />
                                <InputLabel forr="join_card_icon3_fr" label="Card Icon 3 (French)"
                                    v-model="form.join_card_icon3_fr" type="text" />

                                <InputLabel forr="join_card_title1_fr" label="Card Title 1 (French)"
                                    v-model="form.join_card_title1_fr" type="text" />
                                <InputLabel forr="join_card_title2_fr" label="Card Title 2 (French)"
                                    v-model="form.join_card_title2_fr" type="text" />
                                <InputLabel forr="join_card_title3_fr" label="Card Title 3 (French)"
                                    v-model="form.join_card_title3_fr" type="text" />

                                <InputLabel forr="join_card_sub_title1_fr" label="Card Sub Title 1 (French)"
                                    v-model="form.join_card_sub_title1_fr" type="text" />
                                <InputLabel forr="join_card_sub_title2_fr" label="Card Sub Title 2 (French)"
                                    v-model="form.join_card_sub_title2_fr" type="text" />
                                <InputLabel forr="join_card_sub_title3_fr" label="Card Sub Title 3 (French)"
                                    v-model="form.join_card_sub_title3_fr" type="text" />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            Update
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
