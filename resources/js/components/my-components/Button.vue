<script setup lang="ts">
withDefaults(defineProps<{
  type?: 'button' | 'submit' | 'reset';
  label?: string;
}>(), {
  type: 'button',
  label: 'Submit',
});

</script>

<template>
  <button
    :type="type"
    class="bg-[#CA2026] text-white mt-5 px-8 py-2 text-sm rounded-md cursor-pointer hover:bg-red-600 transition duration-300"
  >
    {{ label }}
  </button>
</template>
