<script setup>
defineProps({
  post: {
    type: Object,
    required: true,
  },
});
</script>

<script>
export default {};
</script>
<template>
  <div
    class="max-w-lg mx-auto mb-4 bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden"
  >
    <h2 class="text-xl font-semibold text-gray-800 py-4 px-2">
      {{ post.title }}
    </h2>
    <img v-bind:src="post.media_url" alt="" class="object-cover w-full" />
    <div
      class="flex justify-between items-center px-4 py-2 border-t border-gray-200"
    >
      <button
        class="flex items-center text-gray-600 hover:text-blue-600 transition"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-heart"
        >
          <path
            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
          />
        </svg>
        <span class="text-sm">Like <span class="font-bold">(10)</span></span>
      </button>

      <button
        class="flex items-center text-gray-600 hover:text-red-600 transition"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-heart-off"
        >
          <line x1="2" y1="2" x2="22" y2="22" />
          <path
            d="M16.5 16.5 12 21l-7-7c-1.5-1.45-3-3.2-3-5.5a5.5 5.5 0 0 1 2.14-4.35"
          />
          <path
            d="M8.76 3.1c1.15.22 2.13.78 3.24 1.9 1.5-1.5 2.74-2 4.5-2A5.5 5.5 0 0 1 22 8.5c0 2.12-1.3 3.78-2.67 5.17"
          />
        </svg>
        <span class="text-sm">Dislike <span class="font-bold">(2)</span></span>
      </button>

      <button
        class="flex items-center text-gray-600 hover:text-green-600 transition"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-message-circle"
        >
          <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
        </svg>
        <span class="text-sm">Comment</span>
      </button>

      <button
        class="flex items-center text-gray-600 hover:text-purple-600 transition"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-share"
        >
          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
          <polyline points="16 6 12 2 8 6" />
          <line x1="12" x2="12" y1="2" y2="15" />
        </svg>
        <span class="text-sm">Share</span>
      </button>
    </div>
  </div>
</template>

<style scoped></style>
