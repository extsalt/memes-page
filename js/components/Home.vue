<script setup>
import Post from "./Post.vue";
import { onMounted, ref } from "vue";
import { useInfiniteScroll } from "@vueuse/core";

const posts = ref([]);
const loading = ref(false);
const error = ref(null);
const el = ref(null);

const infiniteScrollCallback = async () => {
  if (loading.value) {
    console.log("Loading var is true - returning");
    return;
  }
  loading.value = true;
  console.log("Loading var is false - calling api");
  const response = await getPosts();
  const json = await response.json();
  posts.value.push(json);
  loading.value = false;
};

const infiniteScrollCallbackOptions = { distance: 100 };
const { isLoading, reset } = useInfiniteScroll(
  el,
  infiniteScrollCallback,
  infiniteScrollCallbackOptions
);

const getPosts = async () => {
  loading.value = true;
  const response = await fetch("/api/posts.php");
  if (!response.ok) {
    error.value = "Error";
  }
  posts.value = await response.json();
  loading.value = false;
};
onMounted(() => {
  getPosts();
});
</script>

<template>
  <p v-if="loading">Loading...</p>
  <p v-if="error">{{ error }}</p>
  <Post v-bind:post="post" v-for="post in posts" v-bind:key="post.id" />
  <div ref="el"></div>
</template>
