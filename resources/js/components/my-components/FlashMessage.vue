<script setup lang="ts">
import { CheckCircle2Icon } from 'lucide-vue-next';
import { ref, watch } from 'vue'

// Accept `flash` as a prop from the parent
const props = defineProps<{
  flash: {
    message?: string
  }
}>()

const visible = ref(false)

// Watch for changes in flash message
watch(
  () => props.flash.message,
  (message) => {
    if (message) {
      visible.value = true
      setTimeout(() => {
        visible.value = false
      }, 5000) 
    }
  },
  { immediate: true }
)
</script>

<template>
  <div
    v-if="visible"
    id="toast-success"
    class="fixed top-5 right-10 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 z-50"
    role="alert"
  >
    <div
      class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200"
    >
      <CheckCircle2Icon class="w-5 h-5" />
      <span class="sr-only">Success</span>
    </div>
    <div class="ms-3 text-sm font-normal">
      <h1>{{ props.flash.message }}</h1>
    </div>
  </div>
</template>
