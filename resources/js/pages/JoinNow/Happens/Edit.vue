<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Happens Edit',
        href: '/join/happens',
    },
];

const props = defineProps<{
    joinCard: {
        id: number;
        language: string;
        join_card_icon_eng: string;
        join_card_title_eng: string;
        join_card_sub_title_eng: string;
        join_card_icon_fr: string;
        join_card_title_fr: string;
        join_card_sub_title_fr: string;
    };
}>();

const form = useForm({
    id: props.joinCard.id,
    language: props.joinCard.language,
    join_card_icon_eng: props.joinCard.join_card_icon_eng,
    join_card_title_eng: props.joinCard.join_card_title_eng,
    join_card_sub_title_eng: props.joinCard.join_card_sub_title_eng,
    join_card_icon_fr: props.joinCard.join_card_icon_fr,
    join_card_title_fr: props.joinCard.join_card_title_fr,
    join_card_sub_title_fr: props.joinCard.join_card_sub_title_fr,
});

const submit = () => {
    form.post('/join/happens/update/' + props.joinCard.id);
};

</script>

<template>

    <Head title="Join Happens Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Happens Edit</h1>
                <Link :href="'/join/happens'"><button
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
                        <InputLabel forr="join_card_title_eng" :label="'Join Card Title English'"
                            v-model="form.join_card_title_eng" type="text" :placeholder="'Enter your title english'" />
                        <InputLabel forr="join_card_sub_title_eng" :label="'Join Card Sub Title English'"
                            v-model="form.join_card_sub_title_eng" type="text"
                            :placeholder="'Enter your card sub title english'" />
                        <InputLabel forr="join_card_icon_eng" :label="'Join Card Icon English'"
                            v-model="form.join_card_icon_eng" type="text" :placeholder="'Enter your card icon'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="join_card_title_fr" :label="'Join Card Title French'"
                            v-model="form.join_card_title_fr" type="text" :placeholder="'Enter your title french'" />
                        <InputLabel forr="join_card_sub_title_fr" :label="'Join Card Sub Title French'"
                            v-model="form.join_card_sub_title_fr" type="text"
                            :placeholder="'Enter your card sub title french'" />
                        <InputLabel forr="join_card_icon_fr" :label="'Join Card Icon French'" v-model="form.join_card_icon_fr"
                            type="text" :placeholder="'Enter your card icon'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
