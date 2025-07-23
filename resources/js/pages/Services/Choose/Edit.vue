<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Trading Edit',
        href: '/service/trading',
    },
];

const props = defineProps<{
    serviceTrading: {
        id: number;
        language: string;
        trading_card_image: string;
        trading_card_title_eng: string;
        trading_card_sub_title_eng: string;
        trading_card_list1_eng: string;
        trading_card_list2_eng: string;
        trading_card_list3_eng: string;
        trading_card_title_fr: string;
        trading_card_sub_title_fr: string;
        trading_card_list1_fr: string;
        trading_card_list2_fr: string;
        trading_card_list3_fr: string;
    };
}>();

const form = useForm({
    id: props.serviceTrading.id,
    language: props.serviceTrading.language,
    trading_card_image: props.serviceTrading.trading_card_image,
    trading_card_title_eng: props.serviceTrading.trading_card_title_eng,
    trading_card_sub_title_eng: props.serviceTrading.trading_card_sub_title_eng,
    trading_card_list1_eng: props.serviceTrading.trading_card_list1_eng,
    trading_card_list2_eng: props.serviceTrading.trading_card_list2_eng,
    trading_card_list3_eng: props.serviceTrading.trading_card_list3_eng,
    trading_card_title_fr: props.serviceTrading.trading_card_title_fr,
    trading_card_sub_title_fr: props.serviceTrading.trading_card_sub_title_fr,
    trading_card_list1_fr: props.serviceTrading.trading_card_list1_fr,
    trading_card_list2_fr: props.serviceTrading.trading_card_list2_fr,
    trading_card_list3_fr: props.serviceTrading.trading_card_list3_fr,
});

const submit = () => {
    form.post('/service/trading/update/' + props.serviceTrading.id);
};

</script>

<template>

    <Head title="Service Trading Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Trading Edit</h1>
                <Link :href="'/service/trading'"><button
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
                        <InputLabel forr="trading_card_image" :label="'Card Image'" v-model="form.trading_card_image"
                            type="text" :placeholder="'Enter your card image url'" />
                        <InputLabel forr="trading_card_title_eng" :label="'Card Title English'"
                            v-model="form.trading_card_title_eng" type="text"
                            :placeholder="'Enter your title english'" />
                        <InputLabel forr="trading_card_sub_title_eng" :label="'Card Sub Title English'"
                            v-model="form.trading_card_sub_title_eng" type="text"
                            :placeholder="'Enter your card sub title english'" />
                        <InputLabel forr="trading_card_list1_eng" :label="'Card List 1 English'"
                            v-model="form.trading_card_list1_eng" type="text"
                            :placeholder="'Enter your card list 1 english'" />
                        <InputLabel forr="trading_card_list2_eng" :label="'Card List 2 English'"
                            v-model="form.trading_card_list2_eng" type="text"
                            :placeholder="'Enter your card list 2 english'" />
                        <InputLabel forr="trading_card_list3_eng" :label="'Card List 3 English'"
                            v-model="form.trading_card_list3_eng" type="text"
                            :placeholder="'Enter your card list 3 english'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="trading_card_title_fr" :label="'Card Title France'"
                            v-model="form.trading_card_title_fr" type="text" :placeholder="'Enter your title france'" />
                        <InputLabel forr="trading_card_sub_title_fr" :label="'Card Sub Title France'"
                            v-model="form.trading_card_sub_title_fr" type="text"
                            :placeholder="'Enter your card sub title france'" />
                        <InputLabel forr="trading_card_list1_fr" :label="'Card List 1 France'"
                            v-model="form.trading_card_list1_fr" type="text"
                            :placeholder="'Enter your card list 1 france'" />
                        <InputLabel forr="trading_card_list2_fr" :label="'Card List 2 France'"
                            v-model="form.trading_card_list2_fr" type="text"
                            :placeholder="'Enter your card list 2 france'" />
                        <InputLabel forr="trading_card_list3_fr" :label="'Card List 3 France'"
                            v-model="form.trading_card_list3_fr" type="text"
                            :placeholder="'Enter your card list 3 france'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
