/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}","./*.{php,html,js}",],
  theme: {
    screens: {
      sm: "475px",
      md: "768px",
      lg: "1200px",
    },
    extend: {
      animation: {
        runningTime: 'runningTime 7s linear 1 forwards',
      },
      keyframes: {
        runningTime: {
          '0%': { width: '0%' },
          '100%': { width: '100%' },
        },
      },
      container: {
        center: true,
        padding: {
          DEFAULT: "16px",
          lg: "40px",
        },
      },
      fontFamily: {
        sans: ['DM Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

