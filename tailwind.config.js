import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
       "./resources/**/*.js",
       "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                green_500:'#24A67B',
                neutral_100:'#F7F7F7',
                neutral_300:'#C8C8C8',
                neutral_400:'#9A9A9A',
                white:'#FFFFFF',
                neutral_500:'#656565'
            },
            letterSpacing:{
                spacingbtn:'0.5px'
            },
            margin:{
                btnLoad:'608px'
            },
            height:{
                heightfooter:'296px'
            },
            active: ['active'],
            
        },
    },

    plugins: [forms],
};
