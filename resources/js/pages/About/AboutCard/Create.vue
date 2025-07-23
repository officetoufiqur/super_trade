<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'About Card Create',
        href: '/about',
    },
];

const form = useForm({
    language: '',
    card_image: '',    
    card_title_eng: '',
    card_title_fr: '',
    card_percentage_eng: '',
    card_percentage_fr: '',
});

const submit = () => {
    form.post('/about/card/store');
};

</script>

<template>

    <Head title="About Card Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">About Card Create</h1>
                <Link :href="'/about'"><button
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
                        <InputLabel forr="card_title_eng" :label="'Card Title English'"
                            v-model="form.card_title_eng" type="text"
                            :placeholder="'Enter your english title'" />
                        <InputLabel forr="card_percentage_eng" :label="'Card Percentage English'" v-model="form.card_percentage_eng" type="number"
                            :placeholder="'Enter your percentage english'" />
                        <InputLabel forr="card_image" :label="'Card Image'" v-model="form.card_image" type="text"
                            :placeholder="'Enter your card image url'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="card_title_fr" :label="'Card Title France'"
                            v-model="form.card_title_fr" type="text"
                            :placeholder="'Enter your France title'" />
                        <InputLabel forr="card_percentage_fr" :label="'Card Percentage France'" v-model="form.card_percentage_fr" type="number"
                            :placeholder="'Enter your percentage france'" />
                        <InputLabel forr="card_image" :label="'Card Image'" v-model="form.card_image" type="text"
                            :placeholder="'Enter your card image url'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Store</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
