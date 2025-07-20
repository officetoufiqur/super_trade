<script setup lang="ts">
defineProps<{
  forr?: string;
  label?: string;
  type?: string;
  id?: string;
  name?: string;
  placeholder?: string;
  value?: string;
}>();

</script>

<template>
  <div class="w-full">
    <label :for="forr" class="text-[#707070]">{{ label }}</label>
    <input :type="type" :id="id" :name="name" :value="value" :v-model="value"
      class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1" :placeholder="placeholder">
  </div>
</template>
