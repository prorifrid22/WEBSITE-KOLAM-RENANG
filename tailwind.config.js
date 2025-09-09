module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'tirta-blue': {
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
        },
        'tirta-yellow': {
          300: '#fef08a',
          400: '#facc15',
          500: '#eab308',
        }
      },
      animation: {
        'navbar-wave': 'navbarWave 10s linear infinite',
        'footer-wave': 'footerWave 15s linear infinite',
      }
    },
  },
  plugins: [],
}