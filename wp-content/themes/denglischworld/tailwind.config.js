module.exports = {
  
  purge: [
    './**/*.php',
    './assets/src/**/*.js'
  ],

  corePlugins: {
    container: false
  },

  theme: {

    fontFamily:{
      'sans': ['Montserrat', 'ui-sans-serif', 'system-ui', 'sans-serif']
    },
    
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },

    extend:{
      colors: {
        'gold': '#FFBA0A',
        'floral-white': '#FFFBF1'

      }
    }
    
  },

  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          marginLeft: 'auto',
          marginRight: 'auto',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '960px',
          },
          '@screen xl': {
            maxWidth: '1172px',
          }
        },

        '.container-large': {
          maxWidth: '100%',
          marginLeft: 'auto',
          marginRight: 'auto',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '960px',
          },
          '@screen xl': {
            maxWidth: '1472px',
          }
        },

      })
    }
  ]
}