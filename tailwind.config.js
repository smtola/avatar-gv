/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
      theme: {
        extend: {
          fontFamily: {
            inter: "Inter",
            "arimo-hebrew-subset": "'Arimo Hebrew Subset'",
            kokoro: "Kokoro"
          },
        },
      },
      plugin:[]
}

