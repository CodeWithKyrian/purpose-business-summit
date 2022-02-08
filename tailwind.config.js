const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
module.exports = {
  mode: 'jit',
  darkMode: 'class',
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/*.blade.php',
    './resources/views/**/**/*.blade.php',
    './resources/views/**/*.blade.php',
    './resources/js/*.vue',
    './resources/scss/app.scss',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        'inner-md': "0px -11px 13px 1px rgba(0,0,0,0.21) inset"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms')],
}
