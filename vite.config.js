import { fileURLToPath, URL } from 'node:url';
import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

// https://vite.dev/config/
/** @type {import('vite').UserConfig} */

export default defineConfig({
  plugins: [vue()],
  root: 'js',
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
  build: {
    outDir: '../public',
    rollupOptions: {
      input: ['js/main.js'],
      output: {
        entryFileNames: 'main.js',
        chunkFileNames: '[name]-[hash].js',
        assetFileNames: 'css/app.css', // Optional: Define asset file names (e.g., CSS)
      },
    },
  },
});
