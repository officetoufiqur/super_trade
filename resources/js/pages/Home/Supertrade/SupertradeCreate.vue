<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Supertrade Create',
        href: '/home/supertrade/create',
    },
];

const form = useForm({
    language: '',
    title_eng: '',
    title_fr: '',
    card_title_eng: '',
    card_title_fr: '',
    card_description_eng: '',
    card_description_fr: '',
    image: '',
});

const submit = () => {
    form.post('/home/supertrade/store');
};

</script>

<template>

    <Head title="Supertrade Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Supertrade Create</h1>
                <Link :href="'/home/supertrade'"><button
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
                        <InputLabel forr="card_title_eng" :label="'Card Title Engling'" v-model="form.card_title_eng"
                            type="text" :placeholder="'Enter your card title english'" />
                        <InputLabel forr="card_description_eng" :label="'Card Description Engling'"
                            v-model="form.card_description_eng" type="text"
                            :placeholder="'Enter your card description english'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="card_title_fr" :label="'Card Title French'" v-model="form.card_title_fr"
                            type="text" :placeholder="'Enter your card title french'" />
                        <InputLabel forr="card_description_fr" :label="'Card Description French'"
                            v-model="form.card_description_fr" type="text"
                            :placeholder="'Enter your card description french'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Store</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
