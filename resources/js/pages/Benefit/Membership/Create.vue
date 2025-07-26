<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Membership Create',
        href: '/join/happens',
    },
];

const form = useForm({
    language: '',
    image: '',
    icon: '',
    card_title_eng: '',
    card_description_eng: '',
    card_btn_text_eng: '',
    card_title_fr: '',
    card_description_fr: '',
    card_btn_text_fr: '',
});

const submit = () => {
    form.post('/benefit/membership/store');
};

</script>

<template>

    <Head title="Membership Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Membership Create</h1>
                <Link :href="'/benefit/membership'"><button
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
                        <InputLabel forr="card_title_eng" :label="'Card Title English'" v-model="form.card_title_eng"
                            type="text" :placeholder="'Enter your title english'" />
                        <InputLabel forr="card_description_eng" :label="'Card Sub Title English'"
                            v-model="form.card_description_eng" type="text"
                            :placeholder="'Enter your card sub title english'" />
                        <InputLabel forr="card_btn_text_eng" :label="'Card Button Text English'"
                            v-model="form.card_btn_text_eng" type="text" :placeholder="'Enter your card button text'" />
                        <InputLabel forr="icon" :label="'Card Icon English'" v-model="form.icon" type="text"
                            :placeholder="'Enter your card icon'" />
                        <InputLabel forr="image" :label="'Card Image English'" v-model="form.image" type="text"
                            :placeholder="'Enter your card image'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="card_title_fr" :label="'Card Title French'" v-model="form.card_title_fr"
                            type="text" :placeholder="'Enter your title french'" />
                        <InputLabel forr="card_description_fr" :label="'Card Sub Title French'" v-model="form.card_description_fr"
                            type="text" :placeholder="'Enter your card sub title french'" />
                        <InputLabel forr="card_btn_text_fr" :label="'Card Button Text French'" v-model="form.card_btn_text_fr"
                            type="text" :placeholder="'Enter your card button text'" />
                        <InputLabel forr="icon" :label="'Card Icon French'" v-model="form.icon" type="text"
                            :placeholder="'Enter your card icon'" />
                        <InputLabel forr="image" :label="'Card Image French'" v-model="form.image" type="text"
                            :placeholder="'Enter your card image'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Store</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
