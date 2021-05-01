// tailwind.config.js
module.exports = {
  purge: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'header': "url('storage/desktop-setup.jpg')",
      }),
      inset: {
        '0.8': '-0.8rem',
      },
      
    },
    minHeight: {
      '20': '20rem',
      '15': '15rem',
      '3.5': '3.5rem',
      '0': '0',
      '1/4': '25%',
      '1/2': '50%',
      '3/4': '75%',
      'full': '100%',
    },
    minWidth: {
      '15': '15rem',
      '0': '0',
      '4': '4%',
      '1/4': '25%',
      '1/2': '50%',
      '3/4': '75%',
      'full': '100%',
    },
    maxHeight: {
      '400': '400px',
      '100': '100px',
    },
    maxWidth: {
      '90': '90%',
      '20': '20%',
    },
    height: {
      '600': '37rem',
    },
    

  },
  variants: {
    extend: {
      fontSize: ['hover', 'focus'],
    },
  },
  plugins: [],
}