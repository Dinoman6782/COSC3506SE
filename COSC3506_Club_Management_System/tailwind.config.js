/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "main-purple": "#9253FE",
        "main-blue": "#858FFF",
        "main-light-purple": "#EBDFFF",
        "nav-purple": "#CDAFFF",
        "main-purple-shade": "#8849f4",
      },
      fontFamily: {
        roboto: ["Roboto", "sans-serif"],
      },
      textShadow: {
        default: "-2px 2px 4px rgba(0, 0, 0, 0.25)",
        md: "-4px 4px 8px rgba(0, 0, 0, 0.25)",
        lg: "-6px 6px 12px rgba(0, 0, 0, 0.25)",
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      const newUtilities = {
        ".text-shadow": {
          textShadow: "-2px 2px 4px rgba(0, 0, 0, 0.25)",
        },
        ".text-shadow-md": {
          textShadow: "-4px 4px 8px rgba(0, 0, 0, 0.25)",
        },
        ".text-shadow-lg": {
          textShadow: "-6px 6px 12px rgba(0, 0, 0, 0.25)",
        },
      };
      addUtilities(newUtilities, ["responsive", "hover"]);
    },
  ],
};
