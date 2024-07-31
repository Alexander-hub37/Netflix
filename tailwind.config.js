/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      margin: {
        '-22': '-5.5rem',
        '-24': '-6rem',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}