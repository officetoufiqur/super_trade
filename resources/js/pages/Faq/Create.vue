<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Faq Create',
        href: '/faq',
    },
];

const form = useForm({
    language: '',
    question_eng: '',
    answer_eng: '',
    question_fr: '',
    answer_fr: '',
});

const submit = () => {
    form.post('/faq/store');
};

</script>

<template>

    <Head title="Faq Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Faq Create</h1>
                <Link :href="'/faq'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-10 mt-3 shadow rounded">
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
                        <InputLabel forr="question" :label="'Question English'" v-model="form.question_eng" type="text"
                            :placeholder="'Enter your question english'" />
                        <InputLabel forr="answer" :label="'Answer English'" v-model="form.answer_eng" type="text"
                            :placeholder="'Enter your answer english'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="question" :label="'Question French'" v-model="form.question_fr" type="text"
                            :placeholder="'Enter your question french'" />
                        <InputLabel forr="answer" :label="'Answer French'" v-model="form.answer_fr" type="text"
                            :placeholder="'Enter your answer french'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Store</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
