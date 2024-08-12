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
        Body: '#CECECE',
        SecondColor: '#D9D9D9',
        blue: '#188ACA',
        PutihPucet: '#EFEFEF',
      },
        fontFamily: {
        'poppins': ['Poppins'],
      }
    },
  },
  plugins: [],
}
