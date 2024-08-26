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
        Body: '#121212',
        SecondColor: '#D9D9D9',
        blue: '#188ACA',
        PutihPucet: '#EFEFEF',
        NavColor: '#f1eff7',
        SearchColor: '#51469d',
        DashboarAdmin: '#D9D9D9',
        IsiDashboard: '#8C120F',
        IsiDashboard2: '#4DA0DB',
        IsiDashboard3: '#695B5B',
        IsiDashboard4: '#2F80ED',
      },
      rotate: {
        '27': '270deg',
      },
        fontFamily: {
        'poppins': ['Poppins'],
      }
    },
  },
  plugins: [],
}
