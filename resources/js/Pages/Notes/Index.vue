<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3'

defineProps({
  notes: {
    type: Array,
    default: []
  }
})
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
                    <h3 class="text-lg text-gray-900">Note List</h3>
                    <p class="text-sm text-gray-600">Take the record and execute any function (Show, Edit and Delete)</p>
                  </div>
                </div>
                <div class="md:col-span-2 mt-5 md:mt-0">
                  <div class="shadow bg-white md:rounded-md p-4">
                    <table v-if="notes.length > 0">
                      <tr class="border" v-for="(note, index) in notes" :key="`note-${index}`">
                        <td class="px-4 py-2">
                          {{note.excerpt}}
                        </td>
                        <td class="px-4 py-2">
                          <Link :href="route('notes.edit', note.id)">
                            Editar
                          </Link>
                        </td>
                        <td class="px-4 py-2">
                          <Link :href="route('notes.show', note.id)">
                            Ver
                          </Link>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </AppLayout>
</template>
