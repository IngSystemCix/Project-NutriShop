/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "*.php",
    "app/view/**/*.{php,js}"
  ],
  theme: {
    extend: {
      backgroundColor: {
        "blue-gray": "#688FAF",
        "indigo": "#27348b",
        "orange-light": "#fa900a",
        "green-dark": "#00bf63",
        "white-bone": "#eff6ff",
        "dark-gray": "#191919",
        "red-light": "#ff3131"
      },
      colors: {
        "blue-gray": "#688FAF",
        "indigo": "#27348b",
        "orange-light": "#fa900a",
        "green-dark": "#00bf63",
        "white-bone": "#eff6ff",
        "dark-gray": "#191919",
        "red-light": "#ff3131"
      }
    },
  },
  plugins: [],
}

