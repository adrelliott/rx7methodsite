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
      body: ['Mona Sans', 'Tahoma', 'sans-serif'],
      heading: ['Hubot Sans', 'Tahoma', 'sans-serif'],
    },
    // fontSize: {
    //   'sm': ['0.8rem', {
    //     lineHeight: '1.12rem',
    //     letterSpacing: '1em',
    //     fontWeight: '400',
    //   }],
    //   'base': ['1rem', {
    //     lineHeight: '1.4rem',
    //     fontWeight: '300',
    //   }],
    //   'lg': ['1.1rem', {
    //     lineHeight: '2.1324rem',
    //     fontWeight: '400',
    //   }],
    //   'xl': ['1.6rem', {
    //     lineHeight: '1.92rem',
    //     fontWeight: '500',
    //   }],
    //   '2xl': ['1.777rem', {
    //     lineHeight: '2.1324rem',
    //     letterSpacing: '-0.01em',
    //     fontWeight: '500',
    //   }],
    //   '3xl': ['2.369rem', {
    //     lineHeight: '2.8428rem',
    //     letterSpacing: '-0.01em',
    //     fontWeight: '600',
    //   }],
    //   '4xl': ['3.157rem', {
    //     lineHeight: '3.157rem',
    //     letterSpacing: '-0.01em',
    //     fontWeight: '600',
    //   }],
    //   '5xl': ['4.209rem', {
    //     lineHeight: '4.209rem',
    //     letterSpacing: '-0.01em',
    //     fontWeight: '700',
    //   }],
    // },
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
          },
          'highlight': '#E68F45',
      },
      // listStyleImage: {
      //   checkmark: 'url("../assets/img/common/check.png")',
      //   bolt: 'url("../assets/img/common/bolt.png")',
      // },
    },
  },
  plugins: [typography],
}

