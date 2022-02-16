const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'ytsm': '512px',
            'ytmob': '656px',
            'ytbigmob': '807px',
            'yttablet': '888px',
            'ytmid': '1144px',
            'ipad': '1328px',
            'ytbig': '1952px',
            'ytverybig': '2288px'
        },

        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',

                yt: {
                    bgmain: '#181818',
                    nav: '#212121',
                    input: '#121212',
                    searchBorder: '#303030',
                    searchButton: '#323232',
                    menuBorder: '#383838',
                    menuFontColor: '#aaaaaa',
                    copyright: '#717171',
                    tagBorder: '#4C4C4C',
                    tagHover: '#4D4D4D',
                    tagHoverBorder: '#606060'
                }
            },

            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp')
    ],
};
