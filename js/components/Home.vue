<script setup>
import Post from "./Post.vue";
</script>

<script>
export default {
  data() {
    return {
      posts: [],
      loading: false,
      error: null,
    };
  },
  methods: {
    async getPosts() {
      this.loading = true;
      const response = await fetch("/api/posts.php");
      if (!response.ok) {
        this.error = "Error";
      }
      this.posts = await response.json();
      this.loading = false;
    },
  },
  created() {
    this.getPosts();
  },
};
</script>

<template>
  <p v-if="loading">Loading...</p>
  <p v-if="error">{{ error }}</p>
  <Post v-bind:post="post" v-for="post in posts" v-bind:key="post.id" />
</template>
