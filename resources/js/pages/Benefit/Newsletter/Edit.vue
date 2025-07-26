<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Benefit Newslet Edit',
        href: '/benefit/newsletter',
    },
];

const props = defineProps<{
    benefitNewsletter: {
        id: number;
        language: string;
        newsletter_title_eng: string;
        newsletter_sub_title_eng: string;
        newsletter_btn_text_eng: string;
        newsletter_title_fr: string;
        newsletter_sub_title_fr: string;
        newsletter_btn_text_fr: string;
    };
}>();


const form = useForm({
    id: props.benefitNewsletter.id,
    language: props.benefitNewsletter.language,
    newsletter_title_eng: props.benefitNewsletter.newsletter_title_eng,
    newsletter_sub_title_eng: props.benefitNewsletter.newsletter_sub_title_eng,
    newsletter_btn_text_eng: props.benefitNewsletter.newsletter_btn_text_eng,
    newsletter_title_fr: props.benefitNewsletter.newsletter_title_fr,
    newsletter_sub_title_fr: props.benefitNewsletter.newsletter_sub_title_fr,
    newsletter_btn_text_fr: props.benefitNewsletter.newsletter_btn_text_fr,
});


function submit() {
    form.post('/benefit/newsletter/update/' + props.benefitNewsletter.id);
}

</script>

<template>

    <Head title="benefit/newsletter/edit/" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">benefit/newsletter/edit/</h1>
                <Link :href="'/benefit/newsletter'"><button
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
                        <InputLabel forr="newsletter_title_eng" :label="'Newsletter Title English'"
                            v-model="form.newsletter_title_eng" type="text"
                            :placeholder="'Enter your english newsletter title'" />
                        <InputLabel forr="newsletter_sub_title_eng" :label="'Newsletter Sub Title English'"
                            v-model="form.newsletter_sub_title_eng" type="text"
                            :placeholder="'Enter your english newsletter Sub title'" />
                        <InputLabel forr="newsletter_btn_text_eng" :label="'Newsletter Button Text English'" v-model="form.newsletter_btn_text_eng" type="text"
                            :placeholder="'Enter your english newsletter button text'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="newsletter_title_fr" :label="'Newsletter Title French'"
                            v-model="form.newsletter_title_fr" type="text"
                            :placeholder="'Enter your french newsletter title'" />
                        <InputLabel forr="newsletter_sub_title_fr" :label="'Newsletter Sub Title French'"
                            v-model="form.newsletter_sub_title_fr" type="text"
                            :placeholder="'Enter your french newsletter Sub title'" />
                        <InputLabel forr="newsletter_btn_text_fr" :label="'Newsletter Button Text French'" v-model="form.newsletter_btn_text_fr" type="text"
                            :placeholder="'Enter your french newsletter button text'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
