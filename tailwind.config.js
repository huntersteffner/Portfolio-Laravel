/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
        secondary: {"50":"#ebda5d","100":"#ebd951","200":"#eeda45","300":"#f5df37","400":"#f7df2b","500":"#f5dd25","600":"#f7df1e","700":"#f0d50a","800":"#f1d608","900":"#f7da06","950":"#fcde01"},
      }
    },
  },
  plugins: [],
}

