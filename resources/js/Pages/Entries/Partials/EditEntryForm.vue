<template>
    <div>
        <button @click="showForm = !showForm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
        <div v-if="showForm" class="fixed inset-0 flex items-center justify-center bg-black/25">
            <div class="bg-white p-4 rounded-lg sm:w-1/2 w-5/6">
                <form @submit.prevent="editForm" class="flex flex-col gap-4">
                    <!-- title -->
                    <div class="text-left">
                        <InputLabel for="title" value="Title"/>
                        <TextInput
                            id="title"
                            v-model="form.title"
                            type="text"
                            class="mt-1 block w-full"
                        />
                        <InputError :message="form.errors.title"/>
                    </div>
                    <!-- content -->
                    <div class="text-left">
                        <InputLabel for="content" value="Content"/>
                        <TextArea 
                            id="content"
                            v-model="form.content"
                            rows="4"
                            class="block p-2.5 w-full"
                        />
                        <InputError :message="form.errors.content"/>
                    </div>
                    <!-- buttons -->
                    <div class="flex justify-between items-center">
                        <!-- reset -->
                        <div class="w-1/3">
                            <button type="reset" @click="showForm = !showForm" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 w-full">Exit</button>
                        </div>
                            <!-- submit -->
                        <div class="flex justify-end w-1/2 items-center gap-2">
                            <Transition
                                enter-active-class="transition ease-in-out"
                                enter-from-class="opacity-0"
                                leave-active-class="transition ease-in-out"
                                leave-to-class="opacity-0"
                            >
                                <p v-if="form.recentlySuccessful" class="text-sm text-green-500 text-right">Added.</p>
                            </Transition>
                            <button type="submit" :disabled="form.processing" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-2/3">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';

const props = defineProps({
  entry: {
    type: Object,
    required: true
  }
});

const showForm = ref(false);

const form = useForm({
  id: props.entry.id,
  title: props.entry.title,
  content: props.entry.content
});

const editForm = () => {
  form
    .put(route('entries.update', form.id), {
      preserveScroll: true,
      onSuccess: () => (showForm.value = !showForm.value
      ), // Use .value with ref
      onError: () => {
      },
    })
};
</script>