module.exports = {
  purge: [
    './site/templates/*.php',
    './site/snippets/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '560px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1366px',
      '2xl': '1536px',
    },
    fontFamily: {
      'sans': ['IBM Plex Sans', 'Roboto', 'Arial-ui', 'sans-serif'],
      'serif': ['Source Serif Pro', 'Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
     }

  },
  variants: {
    extend: {},
  },
  plugins: [],
}
