<script setup>
import Post from './Post.vue';
import { onMounted, ref, useTemplateRef } from 'vue';
import Loader from './Loader.vue';

const posts = ref([]);
const currentPage = ref(0);
const nextPage = ref(0);
const loading = ref(false);
const error = ref(null);
const infiniteScroll = useTemplateRef('infiniteScroll');

const getPosts = async () => {
  if (loading.value) {
    return;
  }
  loading.value = true;
  const response = await fetch('/api/posts.php?page=' + nextPage.value);
  if (!response.ok) {
    error.value = 'Error';
  }
  const json = await response.json();
  posts.value.push(...json.posts);
  currentPage.value = json.currentPage;
  nextPage.value = json.nextPage;
  loading.value = false;
};

// Infinite scroll
const intersectionObserverCallback = (entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      getPosts();
    }
  });
};

const observer = new IntersectionObserver(intersectionObserverCallback, {
  root: null,
  rootMargin: '10px',
  threshold: 0.1,
});
// Infinite scroll

onMounted(() => {
  getPosts();
  observer.observe(infiniteScroll.value);
});
</script>

<template>
  <p v-if="loading">Loading...</p>
  <p v-if="error">{{ error }}</p>
  <Post v-bind:post="post" v-for="post in posts" v-bind:key="post.id" />
  <div class="scroll-container flex justify-center px-4 py-24">
    <button class="px-4 py-1 bg-pink-600 text-white" ref="infiniteScroll">
      <Loader />
    </button>
  </div>
</template>
