import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Tambahkan warna kustom di sini
                customYellow: '#ffc530', // Contoh warna kuning kustom
                customBlue: '#1E3A8A',   // Contoh warna biru kustom
                customGreen: '#10B981',  // Contoh warna hijau kustom
               
            },
        },
    },

    plugins: [forms],
};
