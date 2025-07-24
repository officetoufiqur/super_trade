<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Join Why Choose Edit', href: '/join/choose' },
];

const props = defineProps<{
    joinChoose: {
        id: number;
        language: string;
        join_why_chooses_count_eng: string;
        join_why_chooses_count_title_eng: string;
        join_why_chooses_image_eng: string;
        join_why_chooses_title_eng: string;
        join_why_chooses_list1_eng: string;
        join_why_chooses_list2_eng: string;
        join_why_chooses_list3_eng: string;
        join_why_chooses_list4_eng: string;
        join_why_chooses_list5_eng: string;
        join_why_chooses_list6_eng: string;
        join_why_chooses_list7_eng: string;
        join_why_chooses_list8_eng: string;
        join_why_chooses_offer_number_eng: string;
        join_why_chooses_offer_title_eng: string;
        join_why_chooses_count_fr: string;
        join_why_chooses_count_title_fr: string;
        join_why_chooses_image_fr: string;
        join_why_chooses_title_fr: string;
        join_why_chooses_list1_fr: string;
        join_why_chooses_list2_fr: string;
        join_why_chooses_list3_fr: string;
        join_why_chooses_list4_fr: string;
        join_why_chooses_list5_fr: string;
        join_why_chooses_list6_fr: string;
        join_why_chooses_list7_fr: string;
        join_why_chooses_list8_fr: string;
        join_why_chooses_offer_number_fr: string;
        join_why_chooses_offer_title_fr: string;
    };
}>();

const form = useForm({ ...props.joinChoose });

function submit() {
    form.post('/join/choose/update/' + props.joinChoose.id);
}
</script>

<template>

    <Head title="Join Why Choose Edit" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Why Choose Edit</h1>
                <Link href="/join/choose">
                <button class="bg-[#74B53B] text-white font-bold py-2 px-6 rounded hover:bg-[#344248] duration-300">
                    Back
                </button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 mb-10 shadow rounded">
                <form @submit.prevent="submit">
                    <!-- Language -->
                    <div class="mb-6">
                        <label for="language">Language</label>
                        <select v-model="form.language" class="border border-gray-300 rounded px-3 py-2 w-full mt-1">
                            <option value="english">English</option>
                            <option value="france">French</option>
                        </select>
                    </div>

                    <!-- English Section -->
                    <div v-if="form.language === 'english'" class="space-y-5">
                        <InputLabel forr="join_why_chooses_count_eng" label="Count"
                            v-model="form.join_why_chooses_count_eng" />
                        <InputLabel forr="join_why_chooses_count_title_eng" label="Count Title"
                            v-model="form.join_why_chooses_count_title_eng" />
                        <InputLabel forr="join_why_chooses_image_eng" label="Image URL"
                            v-model="form.join_why_chooses_image_eng" />
                        <InputLabel forr="join_why_chooses_title_eng" label="Title"
                            v-model="form.join_why_chooses_title_eng" />

                        <div class="grid grid-cols-2 gap-4">
                            <InputLabel forr="join_why_chooses_list1_eng" label="List 1"
                                v-model="form.join_why_chooses_list1_eng" />
                            <InputLabel forr="join_why_chooses_list2_eng" label="List 2"
                                v-model="form.join_why_chooses_list2_eng" />
                            <InputLabel forr="join_why_chooses_list3_eng" label="List 3"
                                v-model="form.join_why_chooses_list3_eng" />
                            <InputLabel forr="join_why_chooses_list4_eng" label="List 4"
                                v-model="form.join_why_chooses_list4_eng" />
                            <InputLabel forr="join_why_chooses_list5_eng" label="List 5"
                                v-model="form.join_why_chooses_list5_eng" />
                            <InputLabel forr="join_why_chooses_list6_eng" label="List 6"
                                v-model="form.join_why_chooses_list6_eng" />
                            <InputLabel forr="join_why_chooses_list7_eng" label="List 7"
                                v-model="form.join_why_chooses_list7_eng" />
                            <InputLabel forr="join_why_chooses_list8_eng" label="List 8"
                                v-model="form.join_why_chooses_list8_eng" />
                        </div>


                        <InputLabel forr="join_why_chooses_offer_number_eng" label="Offer Number"
                            v-model="form.join_why_chooses_offer_number_eng" />
                        <InputLabel forr="join_why_chooses_offer_title_eng" label="Offer Title"
                            v-model="form.join_why_chooses_offer_title_eng" />
                    </div>

                    <!-- French Section -->
                    <div v-if="form.language === 'france'" class="space-y-5">
                        <InputLabel forr="join_why_chooses_count_fr" label="Count"
                            v-model="form.join_why_chooses_count_fr" />
                        <InputLabel forr="join_why_chooses_count_title_fr" label="Count Title"
                            v-model="form.join_why_chooses_count_title_fr" />
                        <InputLabel forr="join_why_chooses_image_fr" label="Image URL"
                            v-model="form.join_why_chooses_image_fr" />
                        <InputLabel forr="join_why_chooses_title_fr" label="Title"
                            v-model="form.join_why_chooses_title_fr" />

                        <div class="grid grid-cols-2 gap-4">
                            <InputLabel forr="join_why_chooses_list1_fr" label="List 1"
                                v-model="form.join_why_chooses_list1_fr" />
                            <InputLabel forr="join_why_chooses_list2_fr" label="List 2"
                                v-model="form.join_why_chooses_list2_fr" />
                            <InputLabel forr="join_why_chooses_list3_fr" label="List 3"
                                v-model="form.join_why_chooses_list3_fr" />
                            <InputLabel forr="join_why_chooses_list4_fr" label="List 4"
                                v-model="form.join_why_chooses_list4_fr" />
                            <InputLabel forr="join_why_chooses_list5_fr" label="List 5"
                                v-model="form.join_why_chooses_list5_fr" />
                            <InputLabel forr="join_why_chooses_list6_fr" label="List 6"
                                v-model="form.join_why_chooses_list6_fr" />
                            <InputLabel forr="join_why_chooses_list7_fr" label="List 7"
                                v-model="form.join_why_chooses_list7_fr" />
                            <InputLabel forr="join_why_chooses_list8_fr" label="List 8"
                                v-model="form.join_why_chooses_list8_fr" />
                        </div>

                        <InputLabel forr="join_why_chooses_offer_number_fr" label="Offer Number"
                            v-model="form.join_why_chooses_offer_number_fr" />
                        <InputLabel forr="join_why_chooses_offer_title_fr" label="Offer Title"
                            v-model="form.join_why_chooses_offer_title_fr" />
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="mt-6 bg-[#74B53B] text-white px-6 py-2 cursor-pointer rounded hover:bg-[#344248] duration-300">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
