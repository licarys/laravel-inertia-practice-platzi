<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  excerpt: '',
  content: ''
});

const submit = () => {
  form.post(route('notes.store'), form);
};
</script>

<template>
    <AppLayout title="Notes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Notes Module
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                  <div class="px-4 sm:px-0">
                    <h3 class="text-lg text-gray-900">Create Note</h3>
                    <p class="text-sm text-gray-600">After you create it, you could edit it</p>
                  </div>
                </div>
                <div class="md:col-span-2 mt-5 md:mt-0">
                  <div class="shadow bg-white md:rounded-md p-4">
                    <form @submit.prevent="submit">
                      <label for="excerpt" class="block font-medium text-sm text-gray-700">Excerpt</label>
                      <textarea name="excerpt" rows="5" class="form-input w-full rounded-md shadow-sm" v-model="form.excerpt"></textarea>

                      <label for="content" class="block font-medium text-sm text-gray-700">Content</label>
                      <textarea name="content" rows="10" class="form-input w-full rounded-md shadow-sm" v-model="form.content"></textarea>

                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded-md">Create</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </AppLayout>
</template>
