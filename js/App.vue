<script setup>
import { RouterLink, RouterView } from 'vue-router';
</script>

<template>
  <header class="relative w-full h-16">
    <nav class="container mx-auto h-16 fixed left-0 right-0 bg-pink-700">Navbar</nav>
  </header>
  <div class="my-6"></div>
  <div class="container mx-auto main">
    <div class="drawer-wrapper relative">
      <div class="js-drawer-container flex flex-col fixed px-4 py-4">
        <div>
          <a href="/">
            <div class="flex">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              </svg>
              &nbsp; Home
            </div>
          </a>
        </div>
        <div>
          <RouterLink to="/top">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-start-horizontal">
                <rect width="6" height="16" x="4" y="6" rx="2" />
                <rect width="6" height="9" x="14" y="6" rx="2" />
                <path d="M22 2H2" />
              </svg>
              &nbsp; Top
            </div>
          </RouterLink>
        </div>
        <div>
          <a href="/?type=trending">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-merge">
                <path d="m8 6 4-4 4 4" />
                <path d="M12 2v10.3a4 4 0 0 1-1.172 2.872L4 22" />
                <path d="m20 22-5-5" />
              </svg>
              &nbsp; Trending
            </div>
          </a>
        </div>
        <div>
          <a href="/?type=fresh">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-ccw">
                <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                <path d="M3 3v5h5" />
                <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" />
                <path d="M16 16h5v5" />
              </svg>
              &nbsp; Fresh
            </div>
          </a>
        </div>
        <div>
          <span class="text-lg"> Recent </span>
        </div>
        <hr />
        <div><a href="/type=girl_nsfw">Girl NSFW</a></div>
        <div><a href="/type=anine">Anime</a> NSFW</div>
        <div><a href="/?type=manga">Manga</a></div>
        <div><a href="/?type=latest_news">Latest News</a></div>
        <div><a href="">Girl</a></div>
        <div><a href="">Humor</a></div>
        <div><a href="">Memes</a></div>
        <div><a href="">WTF</a></div>
        <div><a href="">Relationship</a> &amp; Dating</div>
        <div><a href="">Motor</a> &amp; Vehicle</div>
        <div><a href="">Animal</a> &amp; Pets</div>
        <div><a href="">Science</a> &amp; Tech</div>
        <div><a href="">Wholesome</a></div>
      </div>
    </div>
    <main class="bg-pink-500 w-full">
      <RouterView />
    </main>
  </div>
</template>

<style scoped>
.main {
  display: grid;
  grid-template-columns: 1fr 4fr;
  align-items: start;
}
</style>
