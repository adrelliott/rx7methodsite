import defaultTheme from 'tailwindcss/defaultTheme';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],

  darkMode: 'class',
  
  theme: {
    fontFamily: {
      mona: ['Mona Sans', 'sans-serif'],
      hubot: ['Hubot Sans', 'Tahoma', 'sans-serif'],
    },
    extend: {
      colors: {
          'primary': {
              'light': '#F88237',
              DEFAULT: '#f76c14',
              'dark': '#D25C11',
          },
          'primary-shades': {
              'light': '#E68F45',
              DEFAULT: '#E38230',
              'dark': '#CC752B',
          },
          'secondary': {
              'light': '#AA2869',
              DEFAULT: '#9B024E',
              'dark': '#840242',
          },
          'accent': {
              'light': '#1E3A8A',
              DEFAULT: '#1E3A8A',
              'dark': '#1E3A8A',
          }
      },
    },
  },
  plugins: [typography],
}

