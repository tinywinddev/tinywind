const defaults = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    safelist: [
      'bg-blue-300',
      'bg-red-300',
      'bg-green-300',
      'bg-yellow-300',
      'bg-indigo-300',
      'bg-pink-300',
      'bg-gray-300',
      'text-blue-900',
      'text-red-900',
      'text-green-900',
      'text-yellow-900',
      'text-indigo-900',
      'text-pink-900',
      'text-gray-900'
    ]
  },
  theme: {
    extend: {},
  },
  variants: {
    extend: {

    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
  ],
};
